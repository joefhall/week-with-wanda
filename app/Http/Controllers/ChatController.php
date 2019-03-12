<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Utilities\GetsResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
  use GetsResponse;
  
  /**
   * User Repository.
   *
   * @var UserRepository
   */
  protected $userRepository;

  /**
   * Constructor.
   *
   * @param UserRepository $userRepository
   * @return void
   */
  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }
  
  /**
   * Deal with user input and return a response.
   *
   * @param Request $request
   * @return string
   */
  public function respond(Request $request)
  { 
    $user = Auth::user() ?? $this->userRepository->findOrCreateFromSession($request->input('session'));
    
    $currentScenario = $request->input('scenario');
    $userMessageId = $request->input('user');
    $userMessage = $request->input('message');
    $response = $this->getResponse($user, $currentScenario, $userMessageId, $userMessage);
    
    if ($userMessageId !== 'begin') {
      $this->userRepository->addToChatHistory($user->id, [
        'sender' => 'user',
        'scenario' => $currentScenario,
        'id' => $userMessageId,
        'message' => $userMessage,
        'time' => Carbon::now()->timestamp,
      ]);
      
      if ($userMessageId === 'signupPasswordNone') {
        $this->userRepository->updateField($user->id, 'first_name', $this->userRepository->getMessageFromChatHistory($user->id, 'user', 'myName'));
        $this->userRepository->updateField($user->id, 'email', $this->userRepository->getMessageFromChatHistory($user->id, 'user', 'myEmail'));
        $this->userRepository->updateField($user->id, 'password', bcrypt($userMessage));
        $this->userRepository->updateMessageFromChatHistory($user->id, 'user', $userMessageId, str_repeat('*', strlen($userMessage)));
      }
    }
    
    if (!array_has($response, 'error')) {
      $this->userRepository->addToChatHistory($user->id, [
        'sender' => 'wanda',
        'scenario' => array_get($response, 'scenario'),      
        'id' => key(array_get($response, 'wanda')),
        'message' => current(array_get($response, 'wanda')),
        'type' => array_get($response, 'type'),
        'userInput' => array_get($response, 'user'),
        'time' => Carbon::now()->timestamp + 1,
      ]);
    }
    
    return response()->json($response);
  }
  
  /**
   * Get the user's chat history, if any.
   *
   * @param Request $request
   * @return string
   */
  public function history(Request $request)
  {
    $response = [];
    $user = Auth::user();
    $response['user'] = $user ? $user->id : 'none';
    
    if ($user) {
      $response = $this->userRepository->getChatHistory($user->id);
    }
    
    return response()->json($response);
  }
}

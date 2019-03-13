<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Utilities\DoesSpecialMessageActions;
use App\Utilities\GetsResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
  use DoesSpecialMessageActions, GetsResponse;
  
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
   * Store the chat history in the user's record.
   *
   * @param int $userId
   * @param string $currentScenario
   * @param string $userMessageId
   * @param string $userMessage
   * @param array $response
   * @return string
   */
  private function storeChatHistory(
    int $userId,
    string $currentScenario,
    string $userMessageId,
    string $userMessage = null,
    array $response
  )
  {
    if (!($currentScenario === 'welcomeSignup' && $userMessageId === 'begin')) {
      $this->userRepository->addToChatHistory($userId, [
        'sender' => 'user',
        'scenario' => $currentScenario,
        'id' => $userMessageId,
        'message' => $userMessage,
        'time' => Carbon::now()->timestamp,
      ]);
    }
    
    if (!array_has($response, 'error')) {
      $this->userRepository->addToChatHistory($userId, [
        'sender' => 'wanda',
        'scenario' => array_get($response, 'scenario'),      
        'id' => key(array_get($response, 'wanda')),
        'message' => current(array_get($response, 'wanda')),
        'type' => array_get($response, 'type'),
        'userInput' => array_get($response, 'user'),
        'time' => Carbon::now()->timestamp + 1,
      ]);
    }
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
    
    $this->storeChatHistory($user->id, $currentScenario, $userMessageId, $userMessage, $response);
    $this->doSpecialMessageActions($user->id, $request, $userMessageId, $userMessage, $response);
    
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
    
    if ($user) {
      $response = $this->userRepository->getChatHistory($user->id);
    }
    
    return response()->json($response);
  }
}

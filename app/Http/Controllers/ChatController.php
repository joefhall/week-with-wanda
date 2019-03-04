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
    $user = Auth::user();
    
    $currentScenario = $request->input('scenario');
    $userMessageId = $request->input('user');
    $userMessage = $request->input('message');
    $response = $this->getResponse($user, $currentScenario, $userMessageId);
    
    if ($userMessageId !== 'begin') {
      $this->userRepository->addToChatHistory($user->id, [
        'sender' => 'user',
        'scenario' => $currentScenario,
        'id' => $userMessageId,
        'message' => $userMessage,
        'time' => Carbon::now()->timestamp,
      ]);
    }
    
    $this->userRepository->addToChatHistory($user->id, [
      'sender' => 'wanda',
      'scenario' => array_get($response, 'scenario'),      
      'id' => key(array_get($response, 'wanda')),
      'message' => current(array_get($response, 'wanda')),
      'time' => Carbon::now()->timestamp,
    ]);
    
    return response()->json($response);
  }
}

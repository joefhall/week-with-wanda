<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Utilities\DoesSpecialMessageActions;
use App\Utilities\GetsResponse;
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
    
    $this->userRepository->storeChatHistory($user->id, $currentScenario, $userMessageId, $userMessage, $response);
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

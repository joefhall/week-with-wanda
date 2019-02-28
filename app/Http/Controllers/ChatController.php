<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
  /**
   * Deal with user input and return a response.
   *
   * @return string
   */
  public function respond(Request $request)
  {
    // Store in JSON chat history
    $user = Auth::user();
    
    $nextWanda = config("scenarios.{$request->input('scenario')}.user.{$request->input('user')}.wanda");
    $nextScenario = config("scenarios.{$request->input('scenario')}.user.{$request->input('user')}.scenario", $request->input('scenario'));
    $nextInteraction = config("scenarios.{$nextScenario}.wanda.{$nextWanda}");
    
    $nextWandaMessage = __("chats/{$nextScenario}.wanda.{$nextWanda}");
    
    $nextUserMessages = [];
    foreach ($nextInteraction['user'] as $userResponse) {
      $nextUserMessages[$userResponse] = __("chats/{$nextScenario}.user.{$userResponse}");
    }
    // >>> Check if free text response - handle differently
    
    if ($user) {
      $response = [
        'scenario' => $request->input('scenario'),
        'wanda' => $nextWanda,
        'wandaMessage' => $nextWandaMessage,
        'type' => $nextInteraction['type'],
        'user' => $nextInteraction['user'],
        'userMessages' => $nextUserMessages,
      ];
    } else {
      $response = [
        'error' => 'User not found',
      ];
    }
    
    return response()->json($response);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  
  /**
   * Show the React app with the chat for any other chat except for the main one.
   *
   * @param Request $request
   * @param string $loggedIn
   * @param string $startScenario
   * @param string $startMessage
   * @param string $getHistory
   * @param string $token
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function chatView(
    Request $request,
    string $loggedIn = 'false',
    string $startScenario,
    string $startMessage = 'begin',
    string $getHistory = 'false',
    string $passwordResetToken = null
  )
  {
    $authNotRequired = config('scenarios.authNotRequired');
    
    return response()->view('app', compact(
      'loggedIn', 'getHistory', 'startScenario', 'startMessage', 'passwordResetToken', 'authNotRequired'
    ));
  }
}

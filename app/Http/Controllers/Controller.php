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
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function chatView(Request $request, string $loggedIn = 'false', string $startScenario, string $startMessage = 'begin', string $getHistory = 'false')
  {
    $authNotRequired = config('scenarios.authNotRequired');
    
    return response()->view('app', compact('loggedIn', 'getHistory', 'startScenario', 'startMessage', 'authNotRequired'));
  }
}

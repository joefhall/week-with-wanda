<?php

namespace App\Http\Controllers;

use App\Utilities\GetsResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
  use GetsResponse;
  
  /**
   * Show the React app.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = $user ? 'true' : 'false';
    $startScenario = $user ? $user->current_scenario : 'welcomeSignup';
    $startMessage = $this->getUserScenarioStartMessage($user ? $user->id : null, $startScenario);

    return response()
            ->view('app', compact('loggedIn', 'startScenario', 'startMessage'));
  }
}

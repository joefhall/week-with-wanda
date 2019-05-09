<?php

namespace App\Http\Controllers;

use App\Jobs\DeleteUser;
use App\Utilities\GetsResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
  use GetsResponse;
  
  /**
   * Show the React app with the main chat.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = $user ? 'true' : 'false';
    $getHistory = $user ? 'true' : 'false';
    $startScenario = $user ? $user->current_scenario : 'welcomeSignup';
    $startMessage = $this->getUserScenarioStartMessage($user ? $user->id : null, $startScenario);

    return $this->chatView($request, $loggedIn, $startScenario, $startMessage, $getHistory);
  }
  
  /**
   * Show the React app with the About chat.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function about(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = $user ? 'true' : 'false';
    
    return $this->chatView($request, $loggedIn, 'about');
  }
  
  /**
   * Show the React app with the Privacy and Terms & conditions chat.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function privacy(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = $user ? 'true' : 'false';
    
    return $this->chatView($request, $loggedIn, 'privacy');
  }
}

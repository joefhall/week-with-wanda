<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ViewErrorBag;

class UnsubscribeController extends Controller
{
  use AuthenticatesUsers;

  /**
   * Show the unsubscribe chat flow.
   *
   * @return \Illuminate\Http\Response
   */
  public function unsubscribe(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = $user ? 'true' : 'false';
    $getHistory = 'false';
    $startScenario = $user ? 'unsubscribe' : 'unsubscribeLogin';

    return $this->chatView($request, $loggedIn, $startScenario);
  }
}

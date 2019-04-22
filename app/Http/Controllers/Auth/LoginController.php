<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
      logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }
  
    /**
     * Show the login chat flow.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm(Request $request)
    { 
      $loggedIn = 'false';
      $startScenario = $request->session()->has('errors') ? 'loginFailed' : 'login';
      $startMessage = 'begin';

      return response()
              ->view('app', compact('loggedIn', 'startScenario', 'startMessage'));
      
      return view('auth.login');
    }
  
    /**
     * Show the login with Facebook chat flow.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginWithFacebook(Request $request)
    { 
      $loggedIn = 'false';
      $startScenario = 'loginFacebook';
      $startMessage = 'begin';

      return response()
              ->view('app', compact('loggedIn', 'startScenario', 'startMessage'));
      
      return view('auth.login');
    }
  
    /**
     * Log out.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
      $this->performLogout($request);
      
      return redirect()->route('logged-out');
    }
}

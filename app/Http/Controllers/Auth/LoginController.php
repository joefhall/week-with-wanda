<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
      return $this->chatView($request, 'false', 'login');
    }

    /**
     * Handle failed login if login fails e.g. wrong password.
     *
     * @return \Illuminate\Http\Response
     */
    protected function sendFailedLoginResponse(Request $request)
    {
      return redirect()->route('login-failed');
    }

    /**
     * Show login failed chat flow if login fails e.g. wrong password.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginFailed(Request $request)
    {
      return $this->chatView($request, 'false', 'loginFailed');
    }

    /**
     * Log out.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
      if (Auth::user()) {
        $this->performLogout($request);
      }
      
      return redirect()->route('logged-out');
    }
  
    /**
     * Logged out.
     *
     * @return \Illuminate\Http\Response
     */
    public function loggedOut(Request $request)
    {
      return $this->chatView($request, 'false', 'loggedOut');
    }
}

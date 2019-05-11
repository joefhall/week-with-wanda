<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Password Reset Controller
  |--------------------------------------------------------------------------
  |
  | This controller is responsible for handling password reset emails and
  | includes a trait which assists in sending these notifications from
  | your application to your users. Feel free to explore this trait.
  |
  */

  use SendsPasswordResetEmails;
  
  /**
   * Where to redirect users after sending a password reset link.
   *
   * @var string
   */
  protected $redirectTo = '/password-reset-sent';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }
  
  /**
   * Get the response for a successful password reset link.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  string  $response
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
   */
  protected function sendResetLinkResponse(Request $request, $response)
  {
    return redirect()->route('password-reset-sent');
  }
  
  /**
   * Get the response for a failed password reset link.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  string  $response
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
   */
  protected function sendResetLinkFailedResponse(Request $request, $response)
  {
    return redirect()->route('password-reset-sent-failed');
  }
  
  /**
   * Password reset email has been sent.
   *
   * @return \Illuminate\Http\Response
   */
  public function resetPasswordSent(Request $request)
  {
    return $this->chatView($request, 'false', 'resetPasswordSent');
  }
  
  /**
   * Password reset email sending failed.
   *
   * @return \Illuminate\Http\Response
   */
  public function resetPasswordSentFailed(Request $request)
  {
    return $this->chatView($request, 'false', 'resetPasswordSentFailed');
  }
}

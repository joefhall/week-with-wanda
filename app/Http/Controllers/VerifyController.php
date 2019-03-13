<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\VerificationToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
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
   * Verify an email or text message verification token.
   *
   * @param Request $request
   * @param string $verificationTokenId
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function verify(Request $request, string $verificationTokenId)
  {
    $token = VerificationToken::where('uuid', $verificationTokenId)->first();
    $isValid = false;
    
    if ($token) {
      $age = Carbon::now()->diffInMinutes($token->created_at);
      $isValid = $age < VerificationToken::MAX_AGE;
      
      if ($isValid) {        
        $this->userRepository->updateField($token->user_id, $token->type . '_verified_at', Carbon::now());
      }
    }
    
    return view('verify', [
      'matchedToken' => !is_null($token),
      'isValid' => $isValid,
      'type' => $token ? $token->type : null,
    ]);
  }
}

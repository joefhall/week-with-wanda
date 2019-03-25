<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Socialite;

class FacebookLoginController extends Controller
{
    /**
     * User repository.
     */
    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param UserRepository $userRepository
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
      $this->userRepository = $userRepository;
    }
  
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider(Request $request)
    { 
      return Socialite::driver('facebook')
        ->with(['state' => $request->input('state')])
        ->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
      if (!$request->has('code') || $request->has('denied')) {
        return redirect()->route('facebook-signup-denied');
      }
      
      $socialite = Socialite::driver('facebook');
      $facebookUser = $socialite
        ->fields([
          'first_name',
          'email',
        ])->stateless()->userFromToken($socialite->user()->token);

      $authUser = $this->findOrCreateUser($facebookUser, $request);

      Auth::login($authUser, true);

      return redirect()->action('AppController@index');
    }

    /**
     * If a user has registered before using Facebook, return the user
     * else, create a new user object.
     * 
     * @param $facebookUser Socialite user object
     * @param  Request $request
     * @return User
     */
    private function findOrCreateUser($facebookUser, $request)
    {
      $authUser = User::where('facebook_id', $facebookUser->id)->first();
      
      if (!$authUser) {
        $authUser = User::where('email', $facebookUser->email)->first();
        
        if ($authUser) {
          $authUser->facebook_id = $facebookUser->id;
          $authUser->save();
        } else {
          $authUser = User::where('session_id', $request->input('state'))->first();
          $authUser->first_name = $facebookUser->user['first_name'];
          $authUser->email = $facebookUser->email;
          $authUser->email_verified_at = Carbon::now();
          $authUser->facebook_id = $facebookUser->id;
          $this->userRepository->storeProfilePic($authUser->id, $facebookUser->avatar_original);
          $this->userRepository->storeCountryFromIp($authUser->id, $request->ip());
        }
      }
      
      return $authUser;
    }
}

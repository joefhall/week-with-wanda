<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\User;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
      return Socialite::driver('facebook')
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
      $socialite = Socialite::driver('facebook');
      $user = $socialite
        ->fields([
          'first_name',
          'email',
        ])->stateless()->userFromToken($socialite->user()->token);

      $authUser = $this->findOrCreateUser($user, $request);

      Auth::login($authUser, true);

      return redirect()->action('AppController@index');
    }

    /**
     * If a user has registered before using Facebook, return the user
     * else, create a new user object.
     * 
     * @param $user Socialite user object
     * @param  Request $request
     * @return User
     */
    private function findOrCreateUser($user, $request)
    {
      $authUser = User::where('facebook_id', $user->id)->first();
      
      if ($authUser) {
        return $authUser;
      }
      
      $newUser = User::create([
        'name'     => $user->user['first_name'],
        'email'    => $user->email,
        'facebook_id' => $user->id,
      ]);
      
      $this->userRepository->storeProfilePic($newUser->id, $user->avatar_original);
      $this->userRepository->storeCountryFromIp($newUser->id, $request->ip());
      
      return $newUser;
    }
}

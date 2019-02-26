<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Socialite;

class FacebookLoginController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
      $socialite = Socialite::driver('facebook');
      $user = $socialite
        ->fields([
          'first_name',
          'email',
        ])->stateless()->userFromToken($socialite->user()->token);
      
//       dd($user);

      $authUser = $this->findOrCreateUser($user);

      Auth::login($authUser, true);

      return redirect()->action('AppController@index');
    }

    /**
     * If a user has registered before using Facebook, return the user
     * else, create a new user object.
     * 
     * @param $user Socialite user object
     * @return User
     */
    public function findOrCreateUser($user)
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
      
      $newUser->storeProfilePic($user->avatar_original);
      
      return $newUser;
    }
}

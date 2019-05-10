<?php

return [

  /*
  |--------------------------------------------------------------------------------
  | List of Wanda scenarios that do not require user to be signed up and logged in
  |--------------------------------------------------------------------------------
  |
  | These are the exception: the app assumes that almost everything requires the
  | user to be authenticated, but for e.g. welcome we don't
  |
  */

  'about' => true,
  'login' => true,
  'loginFacebook' => true,
  'loginFacebookDenied' => true,
  'loginFailed' => true,
  'privacy' => true,
  'unsubscribeLogin' => true,
  'wandaWall' => true,
  'welcomeSignup' => true,
  
];

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

  'login' => true,
  'loginFacebook' => true,
  'loginFailed' => true,
  'wandaWall' => true,
  'welcomeSignup' => true,
  
];

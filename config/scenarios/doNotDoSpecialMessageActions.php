<?php

return [

  /*
  |--------------------------------------------------------------------------------
  | List of Wanda scenarios where we should *not* check for special message actions
  | using App\Utilities\DoesSpecialMessageActions
  |--------------------------------------------------------------------------------
  */

  'about' => true,
  'login' => true,
  'loginFacebook' => true,
  'loginFacebookDenied' => true,
  'loginFailed' => true,
  'loggedOut' => true,
  'privacy' => true,
  'resetPassword' => true,
  'resetPasswordSent' => true,
  'resetPasswordSentFailed' => true,
  'unsubscribeLogin' => true,
  'wandaWall' => true,
  
];

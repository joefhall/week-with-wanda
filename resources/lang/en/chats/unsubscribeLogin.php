<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Chat content - Unsubscribe - prompt to log in if not already
  |--------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Unsubscribe - prompt to log in if not already",
  
  'wanda' => [
    'hello' => "Hello! We need to get you logged back in before we can talk about unsubscribing you",
    'greatThanksFacebook' => "Great - logging you in now",
    'whatsYourEmail' => "What's your email address?",
    'invalidEmail' => "Hmm, that doesn't look like a valid email address. Please try again",
    'whatsYourPassword' => "Great, and what's your password?",
    'greatThanks' => "Thank you!",
  ],

  'user' => [
    'login' => 'Log in',
  ],

];

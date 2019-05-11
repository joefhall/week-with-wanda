<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Password reset email sending failed
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => null,
  'category' => 'auth',

  'wanda' => [
    'hello' => [
      'type' => 'loginChoice',
      'user' => [
        'login',
      ],
      'emotion' => 'thumbs-down',
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'doLogin' => [
      'wanda' => '',
    ],
    'doLoginFacebook' => [
      'wanda' => '',
    ],
  ],
    
];

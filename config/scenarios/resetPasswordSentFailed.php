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
    'letsGo' => [
      'type' => 'end',
      'user' => [
        'letsGoNone',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'login' => [
      'wanda' => 'letsGo',
    ],
    'loginFacebook' => [
      'wanda' => 'letsGo',
    ],
    'letsGoNone' => [
      'wanda' => '',
    ],
    'doLogin' => [
      'wanda' => '',
    ],
    'doLoginFacebook' => [
      'wanda' => '',
    ],
  ],
    
];

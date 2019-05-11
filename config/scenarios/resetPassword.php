<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Reset password
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => null,
  'category' => 'auth',

  'wanda' => [
    'hello' => [
      'type' => 'loginEmail',
      'user' => [
        'myEmail',
      ],
    ],
    'newPassword' => [
      'type' => 'newPassword',
      'user' => [
        'newPasswordNone',
      ],
    ],
    'resettingPassword' => [
      'type' => 'doPasswordReset',
      'user' => [
        'doPasswordResetNone',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'myEmail' => [
      'wanda' => 'newPassword',
    ],
    'newPasswordNone' => [
      'wanda' => 'resettingPassword',
    ],
    'doPasswordResetNone' => [
      'wanda' => '',
    ],
  ],

];

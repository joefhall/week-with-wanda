<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Login
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => 0,
    'category' => 'login',
  
    'wanda' => [
      'hello' => [
        'type' => 'loginChoice',
        'user' => [
          'login',
        ],
      ],
      'greatThanksFacebook' => [
        'type' => 'doLoginFacebook',
        'user' => [
          'doLoginFacebook',
        ],
        'emotion' => 'thumbs-up',
      ],
      'whatsYourEmail' => [
        'type' => 'loginEmail',
        'user' => [
          'myEmail',
        ],
      ],
      'invalidEmail' => [
        'type' => 'loginEmail',
        'user' => [
          'myEmail',
        ],
        'emotion' => 'thumbs-down',
      ],
      'whatsYourPassword' => [
        'type' => 'loginPassword',
        'user' => [
          'myPassword',
        ],
      ],
      'greatThanks' => [
        'type' => 'doLogin',
        'user' => [
          'doLogin',
        ],
        'emotion' => 'thumbs-up',
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'loginFacebook' => [
        'wanda' => 'greatThanksFacebook',
      ],
      'login' => [
        'wanda' => 'whatsYourEmail',
      ],
      'myEmail' => [
        'wanda' => [
          'validate' => [
            'validator' => 'emailLogin',
            'responses' => [
              'valid' => 'whatsYourPassword',
              'invalid' => 'invalidEmail',
            ],
          ],
        ],
      ],
      'myPassword' => [
        'wanda' => 'greatThanks',
      ],
    ],

    
];

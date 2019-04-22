<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Login with Facebook
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
          //
        ],
      ],
      'greatThanksFacebook' => [
        'type' => 'doLoginFacebook',
        'user' => [
          'doLoginFacebook',
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
    ],

    
];

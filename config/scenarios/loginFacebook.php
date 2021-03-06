<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Login with Facebook
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
          //
        ],
      ],
      'greatThanksFacebook' => [
        'type' => 'doLoginFacebook',
        'user' => [
          'doLoginFacebookNone',
        ],
        'emotion' => 'thumbs-up',
      ],
      'justASec' => [
        'type' => 'end',
        'user' => [
          'justASecNone',
        ],
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'loginFacebook' => [
        'wanda' => 'greatThanksFacebook',
      ],
      'doLoginFacebookNone' => [
        'wanda' => 'justASec',
      ],
      'justASecNone' => [
        'wanda' => '',
      ],
    ],

    
];

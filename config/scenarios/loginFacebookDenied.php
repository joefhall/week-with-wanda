<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Login with Facebook denied
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => 0,
    'category' => 'login',
  
    'wanda' => [
      'hello' => [
        'type' => 'choice',
        'user' => [
          'startAgain',
          'loginAgain',
        ],
        'emotion' => 'thumbs-down',
      ],
      'great' => [
        'type' => 'end',
        'user' => [
          'endNone',
        ],
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'startAgain' => [
        'wanda' => 'end',
      ],
      'loginAgain' => [
        'wanda' => 'end',
      ],
    ],

    
];

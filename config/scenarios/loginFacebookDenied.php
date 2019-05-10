<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Login with Facebook denied
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => null,
    'category' => 'auth',
  
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
        'wanda' => 'great',
      ],
      'loginAgain' => [
        'wanda' => 'great',
      ],
    ],

    
];

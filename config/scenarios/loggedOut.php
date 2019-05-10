<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Logged out
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => null,
    'category' => 'auth',
  
    'wanda' => [
      'hello' => [
        'type' => 'none',
        'user' => [
          'helloNone',
        ],
      ],
      'seeYouSoon' => [
        'type' => 'end',
        'user' => [
          'seeYouSoonNone',
        ],
        'emotion' => 'waving',
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'helloNone' => [
        'wanda' => 'seeYouSoon',
      ],
      'seeYouSoonNone' => [
        'wanda' => '',
      ],
    ],

    
];

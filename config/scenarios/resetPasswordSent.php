<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Password reset email has been sent
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => null,
    'category' => 'auth',
  
    'wanda' => [
      'hello' => [
        'type' => 'end',
        'user' => [
          'helloNone',
        ],
        'emotion' => 'thumbs-up',
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'helloNone' => [
        'wanda' => '',
      ],
    ],

    
];

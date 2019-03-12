<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Post-signup, get some extra details from the user
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => 0,
    'category' => 'beginning',
  
    'wanda' => [
      'hiAgain' => [
        'type' => 'choice',
        'user' => [
          'helloAgain',
        ],
      ],
    ],
  
    'user' => [
      'helloAgain' => [
        'wanda' => 'blahhh',
      ],
    ],

    
];

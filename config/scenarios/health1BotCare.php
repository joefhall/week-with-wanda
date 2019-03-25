<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Health - day 1 - Wanda taking over your healthcare
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 1,
  'category' => 'health',

  'wanda' => [
    'helloAgain' => [
      'type' => 'choice',
      'user' => [
        'blah',
        'blah',
        'blah',
      ],
    ],
    
  ],

  'user' => [
    'begin' => [
      'wanda' => 'helloAgain',
    ],
    
  ],
  
];

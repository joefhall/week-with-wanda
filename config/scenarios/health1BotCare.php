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
    'hello' => [
      'type' => 'choice',
      'user' => [
        'hello1',
        'hello2',
      ],
    ],
    
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    
  ],
  
];

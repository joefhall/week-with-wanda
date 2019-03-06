<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wanda scenarios - Welcome i.e. initial greetings and signup
    |--------------------------------------------------------------------------
    | Actual chat content can be found in resources/lang/chats directory
    |
    */

    'day' => 0,
    'category' => 'beginning',
  
    'wanda' => [
      'hello' => [
        'type' => 'choice',
        'user' => [
          'hello',
          'hi',
        ],
      ],
      'howareyou' => [
        'type' => 'choice',
        'user' => [
          'goodthanks',
          'notbad',
        ],
      ],
      'tellmesomething' => [
        'type' => 'text',
        'user' => [
          'something'
        ],
      ],
      'ooh' => [
        'type' => 'none',
        'user' => [
          'oohNone',
        ],
      ],
      'youreInteresting' => [
        'type' => 'choice',
        'user' => [
          'whatever',
        ],
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'hello' => [
        'wanda' => 'howareyou',
      ],
      'hi' => [
        'wanda' => 'howareyou',
      ],
      'goodthanks' => [
        'wanda' => 'tellmesomething',
      ],
      'notbad' => [
        'wanda' => 'tellmesomething',
      ],
      'something' => [
        'wanda' => 'ooh',
      ],
      'oohNone' => [
        'wanda' => 'youreInteresting',
      ],
      'whatever' => [
      ],
    ],

    
];

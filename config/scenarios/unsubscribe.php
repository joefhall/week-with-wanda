<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Unsubscribe
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
      'emotion' => 'shocked',
    ],
    'missYou' => [
      'type' => 'none',
      'user' => [
        'missYouNone',
      ],
    ],
    'sure' => [
      'type' => 'choice',
      'user' => [
        'yes',
        'no',
      ],
    ],
    'hurray' => [
      'type' => 'none',
      'user' => [
        'hurrayNone',
      ],
      'emotion' => 'elated',
    ],
    'speakSoon' => [
      'type' => 'end',
      'user' => [
        'speakSoonNone',
      ],
    ],
    'hurray' => [
      'type' => 'none',
      'user' => [
        'hurrayNone',
      ],
      'emotion' => 'elated',
    ],
    'boo' => [
      'type' => 'none',
      'user' => [
        'booNone',
      ],
      'emotion' => 'thumbs-down',
    ],
    'sad' => [
      'type' => 'none',
      'user' => [
        'sadNone',
      ],
    ],
    'sadEmoji' => [
      'type' => 'none',
      'user' => [
        'sadEmojiNone',
      ],
    ],
    'delete' => [
      'type' => 'none',
      'user' => [
        'deleteNone',
      ],
    ],
    'feedback' => [
      'type' => 'end',
      'user' => [
        'feedbackNone',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'helloNone' => [
      'wanda' => 'missYou',
    ],
    'missYouNone' => [
      'wanda' => 'sure',
    ],
    'no' => [
      'wanda' => 'hurray',
    ],
    'hurrayNone' => [
      'wanda' => 'speakSoon',
    ],
    'speakSoonNone' => [
      'wanda' => '',
    ],
    'yes' => [
      'wanda' => 'boo',
    ],
    'booNone' => [
      'wanda' => 'sad',
    ],
    'sadNone' => [
      'wanda' => 'sadEmoji',
    ],
    'sadEmojiNone' => [
      'wanda' => 'delete',
    ],
    'deleteNone' => [
      'wanda' => 'feedback',
    ],
    'feedbackNone' => [
      'wanda' => '',
    ],
  ],
    
];

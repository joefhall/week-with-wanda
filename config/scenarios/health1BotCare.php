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
    'observation' => [
      'type' => 'choice',
      'user' => [
        'acknowledge1',
        'acknowledge2',
      ],
    ],
    'acknowledgeResponse' => [
      'type' => 'choice',
      'user' => [
        'getStarted1',
        'getStarted2',
      ],
    ],
    'hateWaitingDoctor' => [
      'type' => 'choice',
      'user' => [
        'hateWaitingDoctorPositive',
        'hateWaitingDoctorNegative',
      ],
    ],
    'hateCosts' => [
      'type' => 'choice',
      'user' => [
        'hateCostsPositive',
        'hateCostsNegative',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'hello1' => [
      'wanda' => 'observation',
    ],
    'hello2' => [
      'wanda' => 'observation',
    ],
    'acknowledge1' => [
      'wanda' => 'acknowledgeResponse',
    ],
    'acknowledge2' => [
      'wanda' => 'acknowledgeResponse',
    ],
    'getStarted1' => [
      'wanda' => 'hateWaitingDoctor',
    ],
    'getStarted2' => [
      'wanda' => 'hateWaitingDoctor',
    ],
    'hateWaitingDoctorPositive' => [
      'wanda' => 'hateCosts',
    ],
    'hateWaitingDoctorNegative' => [
      'wanda' => 'hateCosts',
    ],
  ],
  
];

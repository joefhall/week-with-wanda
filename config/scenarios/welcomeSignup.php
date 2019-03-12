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
      'whatWantDo' => [
        'type' => 'choice',
        'user' => [
          'signMeUp',
          'findOutMore',
        ],
      ],
      'moreInfo' => [
        'type' => 'choice',
        'user' => [
          'signMeUp',
        ],
      ],
      'whatsYourName' => [
        'type' => 'signupName',
        'user' => [
          'myName',
        ],
      ],
      'whatsYourEmail' => [
        'type' => 'signupEmail',
        'user' => [
          'myEmail',
        ],
      ],
      'invalidEmail' => [
        'type' => 'signupEmail',
        'user' => [
          'myEmail',
        ],
      ],
      'userExists' => [
        'type' => 'signupEmail',
        'user' => [
          'myEmail',
        ],
      ],
      'choosePassword' => [
        'type' => 'signupPassword',
        'user' => [
          'signupPasswordNone',
        ],
      ],
      'greatThanks' => [
        'type' => 'doLogin',
        'user' => [
          'doLogin',
        ],
      ],
      'giveMeASec' => [
        'type' => 'none',
        'user' => [
          '',
        ],
      ],
      'okWereBack' => [
        'type' => 'none',
        'user' => [
          'great',
        ],
      ],
    ],
  
    'user' => [
      'begin' => [
        'wanda' => 'hello',
      ],
      'hello' => [
        'wanda' => 'whatWantDo',
      ],
      'hi' => [
        'wanda' => 'whatWantDo',
      ],
      'signMeUp' => [
        'wanda' => 'whatsYourName',
      ],
      'findOutMore' => [
        'wanda' => 'moreInfo',
      ],
      'myName' => [
        'wanda' => 'whatsYourEmail',
      ],
      'myEmail' => [
        'wanda' => [
          'validate' => [
            'validator' => 'email',
            'responses' => [
              'valid' => 'choosePassword',
              'invalid' => 'invalidEmail',
              'userExists' => 'userExists',
            ],
          ]
        ],
      ],
      'signupPasswordNone' => [
        'wanda' => 'greatThanks',
      ],
      'doLogin' => [
        'wanda' => 'okWereBack',
      ],
      'great' => [
        'scenario' => 'postSignupDetails',
        'wanda' => 'hiAgain',
      ],
    ],

    
];

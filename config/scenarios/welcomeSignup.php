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
        'emotion' => 'waving',
      ],
      'whatWantDo' => [
        'type' => 'choice',
        'user' => [
          'getStarted',
          'findOutMore',
          'logBackIn',
        ],
      ],
      'moreInfo' => [
        'type' => 'choice',
        'user' => [
          'makeLifeBetter',
        ],
      ],
      'howLifeBetter' => [
        'type' => 'choiceMulti',
        'user' => [
          'betterHealth',
          'betterWealth',
          'betterRelationships',
        ],
      ],
      'signupChoice' => [
        'type' => 'signupChoice',
        'user' => [
          'signupRegular',
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
        'emotion' => 'thumbs-down',
      ],
      'userExists' => [
        'type' => 'signupEmail',
        'user' => [
          'myEmail',
        ],
        'emotion' => 'thumbs-down',
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
        'emotion' => 'thumbs-up',
      ],
      'greatThanksFacebook' => [
        'type' => 'doLoginFacebook',
        'user' => [
          'doLoginFacebook',
        ],
        'emotion' => 'thumbs-up',
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
          'okWereBackNone',
        ],
      ],
      'okWereBackFacebook' => [
        'type' => 'none',
        'user' => [
          'okWereBackFacebookNone',
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
      'getStarted' => [
        'wanda' => 'howLifeBetter',
      ],
      'makeLifeBetter' => [
        'wanda' => 'howLifeBetter',
      ],
      'betterHealth' => [
        'wanda' => 'signupChoice',
      ],
      'betterWealth' => [
        'wanda' => 'signupChoice',
      ],
      'betterRelationships' => [
        'wanda' => 'signupChoice',
      ],
      'logBackIn' => [
        'wanda' => 'logBackInNone',
      ],
      'signMeUp' => [
        'wanda' => 'signupChoice',
      ],
      'signupFacebook' => [
        'wanda' => 'greatThanksFacebook',
      ],
      'signupRegular' => [
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
          ],
        ],
      ],
      'signupPasswordNone' => [
        'wanda' => 'greatThanks',
      ],
      'doLogin' => [
        'wanda' => 'okWereBack',
      ],
      'doLoginFacebook' => [
        'wanda' => 'okWereBackFacebook',
      ],
      'okWereBackNone' => [
        'scenario' => 'postSignupDetails',
        'wanda' => 'checkEmail',
      ],
      'okWereBackFacebookNone' => [
        'scenario' => 'postSignupDetails',
        'wanda' => 'contactPreferences',
      ],
    ],

    
];

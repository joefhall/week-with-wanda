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
      'greatThanksFacebook' => [
        'type' => 'doLoginFacebook',
        'user' => [
          'doLoginFacebook',
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

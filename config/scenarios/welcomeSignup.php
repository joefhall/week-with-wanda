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
        'type' => 'none',
        'user' => [
          'helloNone',
        ],
        'emotion' => 'waving',
      ],
      'imWanda' => [
        'type' => 'none',
        'user' => [
          'imWandaNone',
        ],
      ],
      'video' => [
        'type' => 'choice',
        'user' => [
          'hello',
          'hi',
        ],
      ],
      'soGood' => [
        'type' => 'none',
        'user' => [
          'soGoodNone',
        ],
      ],
      'initialObservation' => [
        'type' => 'none',
        'user' => [
          'initialObservationNone',
        ],
      ],
      'whatWantDo' => [
        'type' => 'choice',
        'user' => [
          'findOutMore',
          'getStarted',
          'logBackIn',
        ],
        'emotion' => 'base',
      ],
      'moreInfo' => [
        'type' => 'none',
        'user' => [
          'moreInfoNone',
        ],
        'emotion' => 'clapping',
      ],
      'moreInfo2' => [
        'type' => 'none',
        'user' => [
          'moreInfo2None',
        ],
      ],
      'moreInfo2Emoji' => [
        'type' => 'none',
        'user' => [
          'moreInfo2EmojiNone',
        ],
      ],
      'moreInfo3' => [
        'type' => 'none',
        'user' => [
          'moreInfo3None',
        ],
      ],
      'moreInfo4' => [
        'type' => 'none',
        'user' => [
          'moreInfo4None',
        ],
      ],
      'moreInfo5' => [
        'type' => 'choice',
        'user' => [
          'moreInfoGreat',
          'moreInfoOk',
        ],
        'emotion' => 'base',
      ],
      'moreInfo5a' => [
        'type' => 'none',
        'user' => [
          'moreInfo5aNone',
        ],
      ],
      'moreInfo5b' => [
        'type' => 'none',
        'user' => [
          'moreInfo5bNone',
        ],
      ],
      'moreInfo6' => [
        'type' => 'none',
        'user' => [
          'moreInfo6None',
        ],
      ],
      'moreInfo7' => [
        'type' => 'none',
        'user' => [
          'moreInfo7None',
        ],
      ],
      'moreInfo8' => [
        'type' => 'none',
        'user' => [
          'moreInfo8None',
        ],
      ],
      'moreInfoWhatSay' => [
        'type' => 'choice',
        'user' => [
          'letsPlay',
          'moreInfoUnsure',
        ],
      ],
      'moreInfoPersuade' => [
        'type' => 'none',
        'user' => [
          'moreInfoPersuadeNone',
        ],
      ],
      'moreInfoPersuade2' => [
        'type' => 'none',
        'user' => [
          'moreInfoPersuade2None',
        ],
      ],
      'moreInfoPersuade3' => [
        'type' => 'none',
        'user' => [
          'moreInfoPersuade3None',
        ],
      ],
      'moreInfoPersuade4' => [
        'type' => 'none',
        'user' => [
          'moreInfoPersuade4None',
        ],
      ],
      'moreInfoPersuade4Emoji' => [
        'type' => 'none',
        'user' => [
          'moreInfoPersuade4EmojiNone',
        ],
      ],
      'moreInfoPersuadeWhatSay' => [
        'type' => 'choice',
        'user' => [
          'tryIt',
          'moreInfoPersuadeUnsure',
        ],
      ],
      'moreInfoNotPersuaded' => [
        'type' => 'choice',
        'user' => [
          'moreInfoNotPersuadedTryAnyway',
        ],
        'emotion' => 'unhappy',
      ],
      'soTellMe' => [
        'type' => 'none',
        'user' => [
          'soTellMeNone',
        ],
        'emotion' => 'elated',
      ],
      'howLifeBetter' => [
        'type' => 'choiceMulti',
        'user' => [
          'betterHealth',
          'betterWealth',
          'betterRelationships',
        ],
      ],
      'greatChoice' => [
        'type' => 'none',
        'user' => [
          'greatChoiceNone',
        ],
      ],
      'signupChoice' => [
        'type' => 'signupChoice',
        'user' => [
          'signupRegular',
        ],
        'emotion' => 'base',
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
          'giveMeASecNone',
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
      'helloNone' => [
        'wanda' => 'imWanda',
      ],
      'imWandaNone' => [
        'wanda' => 'video',
      ],
      'hello' => [
        'wanda' => 'soGood',
      ],
      'hi' => [
        'wanda' => 'soGood',
      ],
      'soGoodNone' => [
        'wanda' => 'initialObservation',
      ],
      'initialObservationNone' => [
        'wanda' => 'whatWantDo',
      ],
      'findOutMore' => [
        'wanda' => 'moreInfo',
      ],
      'moreInfoNone' => [
        'wanda' => 'moreInfo2',
      ],
      'moreInfo2None' => [
        'wanda' => 'moreInfo2Emoji',
      ],
      'moreInfo2EmojiNone' => [
        'wanda' => 'moreInfo3',
      ],
      'moreInfo3None' => [
        'wanda' => 'moreInfo4',
      ],
      'moreInfo4None' => [
        'wanda' => 'moreInfo5',
      ],
      'moreInfoGreat' => [
        'wanda' => 'moreInfo5a',
      ],
      'moreInfoOk' => [
        'wanda' => 'moreInfo5a',
      ],
      'moreInfo5aNone' => [
        'wanda' => 'moreInfo5b',
      ],
      'moreInfo5bNone' => [
        'wanda' => 'moreInfo6',
      ],
      'moreInfo6None' => [
        'wanda' => 'moreInfo7',
      ],
      'moreInfo7None' => [
        'wanda' => 'moreInfo8',
      ],
      'moreInfo8None' => [
        'wanda' => 'moreInfoWhatSay',
      ],
      
      'letsPlay' => [
        'wanda' => 'soTellMe',
      ],
      'moreInfoUnsure' => [
        'wanda' => 'moreInfoPersuade',
      ],
      'moreInfoPersuadeNone' => [
        'wanda' => 'moreInfoPersuade2',
      ],
      'moreInfoPersuade2None' => [
        'wanda' => 'moreInfoPersuade3',
      ],
      'moreInfoPersuade3None' => [
        'wanda' => 'moreInfoPersuade4',
      ],
      'moreInfoPersuade4None' => [
        'wanda' => 'moreInfoPersuade4Emoji',
      ],
      'moreInfoPersuade4EmojiNone' => [
        'wanda' => 'moreInfoPersuadeWhatSay',
      ],
      'tryIt' => [
        'wanda' => 'soTellMe',
      ],
      'moreInfoPersuadeUnsure' => [
        'wanda' => 'moreInfoNotPersuaded',
      ],
      'moreInfoNotPersuadedTryAnyway' => [
        'wanda' => 'soTellMe',
      ],
      
      'getStarted' => [
        'wanda' => 'soTellMe',
      ],
      'soTellMeNone' => [
        'wanda' => 'howLifeBetter',
      ],
      'betterHealth' => [
        'wanda' => 'greatChoice',
      ],
      'betterWealth' => [
        'wanda' => 'greatChoice',
      ],
      'betterRelationships' => [
        'wanda' => 'greatChoice',
      ],
      'greatChoiceNone' => [
        'wanda' => 'signupChoice',
      ],
      'logBackIn' => [
        'wanda' => 'logBackInNone',
      ],
      'signupFacebook' => [
        'wanda' => 'greatThanksFacebook',
      ],
      'signupRegular' => [
        'wanda' => 'whatsYourName',
      ],
      'myName' => [
        'wanda' => 'whatsYourEmail',
      ],
      'myEmail' => [
        'wanda' => [
          'validate' => [
            'validator' => 'emailSignup',
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
        'scenario' => 'postSignupDetails',
        'wanda' => 'checkEmail',
      ],
      'doLoginFacebook' => [
        'scenario' => 'postSignupDetails',
        'wanda' => 'contactPreferences',
      ],
    ],

    
];

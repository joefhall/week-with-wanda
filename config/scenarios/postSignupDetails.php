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
      'checkEmail' => [
        'type' => 'choice',
        'user' => [
          'doneEmail',
          'resendEmail',
        ],
      ],
      'checkEmailAgain' => [
        'type' => 'choice',
        'user' => [
          'doneEmail',
          'resendEmail',
        ],
      ],
      'checkEmailResend' => [
        'type' => 'choice',
        'user' => [
          'doneEmail',
          'resendEmail',
        ],
      ],
      'contactPreferences' => [
        'type' => 'choice',
        'user' => [
          'contactEmailOnly',
          'contactTextMessageOnly',
          'contactBoth',
        ],
      ],
      'whatsMobileNumber' => [
        'type' => 'signupMobileNumber',
        'user' => [
          'myMobileNumber',
        ],
      ],
      'checkMobileNumber' => [
        'type' => 'textAndChoice',
        'user' => [
          'doneMobileNumber',
          'resendMobileNumber',
        ],
      ],
      'checkMobileNumberAgain' => [
        'type' => 'textAndChoice',
        'user' => [
          'doneMobileNumber',
          'resendMobileNumber',
        ],
      ],
      'checkMobileNumberResend' => [
        'type' => 'textAndChoice',
        'user' => [
          'doneMobileNumber',
          'resendMobileNumber',
        ],
      ],
      'allDone' => [
        'type' => 'none',
        'user' => [
          'allDoneNone',
        ],
      ],
    ],
  
    'user' => [
      'doneEmail' => [
        'wanda' => [
          'validate' => [
            'validator' => 'emailVerify',
            'responses' => [
              'verified' => 'contactPreferences',
              'notVerified' => 'checkEmailAgain',
            ],
          ],
        ],
      ],
      'resendEmail' => [
        'wanda' => 'checkEmailResend',
      ],
      'contactEmailOnly' => [
        'wanda' => 'XXXXXXXXXXXXXX',
      ],
      'contactTextMessageOnly' => [
        'wanda' => 'whatsMobileNumber',
      ],
      'contactBoth' => [
        'wanda' => 'whatsMobileNumber',
      ],
      'myMobileNumber' => [
        'wanda' => 'checkMobileNumber',
      ],
      'doneMobileNumber' => [
        'wanda' => [
          'validate' => [
            'validator' => 'mobileNumberVerify',
            'responses' => [
              'verified' => 'allDone',
              'notVerified' => 'checkMobileNumberAgain',
            ],
          ],
        ],
      ],
      'resendMobileNumber' => [
        'wanda' => 'checkMobileNumberResend',
      ],
    ],

    
];

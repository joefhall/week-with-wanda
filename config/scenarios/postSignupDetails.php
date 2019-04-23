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
        'changeEmail',
      ],
    ],
    'checkEmailAgain' => [
      'type' => 'choice',
      'user' => [
        'doneEmail',
        'resendEmail',
        'changeEmail',
      ],
    ],
    'checkEmailResend' => [
      'type' => 'choice',
      'user' => [
        'doneEmail',
        'resendEmail',
        'changeEmail',
      ],
    ],
    'checkEmailChange' => [
      'type' => 'choice',
      'user' => [
        'doneEmail',
        'resendEmail',
        'changeEmail',
      ],
    ],
    'whatsYourNewEmail' => [
      'type' => 'signupEmail',
      'user' => [
        'myEmail',
      ],
    ],
    'contactPreferences' => [
      'type' => 'choice',
      'user' => [
        'contactEmailOnly',
        'contactBoth',
      ],
    ],
    'whatsMobileNumber' => [
      'type' => 'signupMobileNumber',
      'user' => [
        'myMobileNumber',
      ],
    ],
    'whatsYourNewMobileNumber' => [
      'type' => 'signupMobileNumber',
      'user' => [
        'myMobileNumberChange',
      ],
    ],
    'checkMobileNumber' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
      ],
    ],
    'checkMobileNumberAgain' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
      ],
    ],
    'checkMobileNumberResend' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
      ],
    ],
    'checkMobileNumberChange' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
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
    'changeEmail' => [
      'wanda' => 'whatsYourNewEmail',
    ],
    'myEmail' => [
      'wanda' => 'checkEmailChange',
    ],
    'contactEmailOnly' => [
      'wanda' => 'allDone',
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
    'myMobileNumberChange' => [
      'wanda' => 'checkMobileNumberChange',
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
    'changeMobileNumber' => [
      'wanda' => 'whatsYourNewMobileNumber',
    ],
  ],
  
];

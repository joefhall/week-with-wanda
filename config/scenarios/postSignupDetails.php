<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Post-signup email / text message confirmation
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
        'notWorkingMobileNumber',
      ],
    ],
    'checkMobileNumberAgain' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
        'notWorkingMobileNumber',
      ],
    ],
    'checkMobileNumberResend' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
        'notWorkingMobileNumber',
      ],
    ],
    'checkMobileNumberChange' => [
      'type' => 'textAndChoice',
      'user' => [
        'doneMobileNumber',
        'resendMobileNumber',
        'changeMobileNumber',
        'notWorkingMobileNumber',
      ],
    ],
    'checkMobileNumberNotWorking' => [
      'type' => 'none',
      'user' => [
        'checkMobileNumberNotWorkingNone',
      ],
    ],
    'checkMobileNumberNotWorkingAllDone' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
      'emotion' => 'waving',
    ],
    'allDone' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
      'emotion' => 'waving',
    ],
    'end' => [
      'type' => 'end',
      'user' => [
        'endNone',
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
    'notWorkingMobileNumber' => [
      'wanda' => 'checkMobileNumberNotWorking',
    ],
    'checkMobileNumberNotWorkingNone' => [
      'wanda' => 'checkMobileNumberNotWorkingAllDone',
    ],
    'bye1' => [
      'wanda' => 'end',
    ],
    'bye2' => [
      'wanda' => 'end',
    ],
    'endNone' => [
      'wanda' => '',
    ],
  ],
  
];

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
      
      'contactPreferences' => [
        'type' => 'choice',
        'user' => [
          'emailOnly',
          'textMessageOnly',
          'both',
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
        'wanda' => 'checkEmailAgain',
      ],
    ],

    
];

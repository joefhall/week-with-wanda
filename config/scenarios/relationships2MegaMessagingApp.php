<?php

return [

  /*
  |-------------------------------------------------------------------------------------------------------
  | Wanda scenarios - Relationships - day 2 - Wanda wants to buy up every messaging app and combine them
  |-------------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 2,
  'category' => 'relationships',

  'wanda' => [
    'hello' => [
      'type' => 'choice',
      'user' => [
        'hello1',
        'hello2',
      ],
      'emotion' => 'waving',
    ],
    'glad' => [
      'type' => 'none',
      'user' => [
        'gladNone',
      ],
    ],
    'missMessages' => [
      'type' => 'choice',
      'user' => [
        'doI',
        'yeahTrue',
      ],
      'emotion' => 'unhappy',
    ],
    'analysing' => [
      'type' => 'none',
      'user' => [
        'analysingNone',
      ],
    ],
    'analysingPic' => [
      'type' => 'none',
      'user' => [
        'analysingPicNone',
      ],
    ],
    'pretty' => [
      'type' => 'choice',
      'user' => [
        'huh',
        'whatMean',
      ],
    ],
    'missed' => [
      'type' => 'none',
      'user' => [
        'missedNone',
      ],
    ],
    'invitations' => [
      'type' => 'none',
      'user' => [
        'invitationsNone',
      ],
    ],
    'birthdays' => [
      'type' => 'none',
      'user' => [
        'birthdaysNone',
      ],
    ],
    'niceMessages' => [
      'type' => 'none',
      'user' => [
        'niceMessagesNone',
      ],
    ],
    'neededHelp' => [
      'type' => 'choice',
      'user' => [
        'hmm',
        'ohDear',
      ],
      'emotion' => 'thumbs-down',
    ],
    'notBad' => [
      'type' => 'none',
      'user' => [
        'notBadNone',
      ],
    ],
    'lovely' => [
      'type' => 'choice',
      'user' => [
        'lovelyEmoji1',
        'lovelyEmoji2',
      ],
      'emotion' => 'base',
    ],
    'techProblem' => [
      'type' => 'choice',
      'user' => [
        'techAgree',
        'techOk',
      ],
    ],
    'comeIn' => [
      'type' => 'none',
      'user' => [
        'comeInNone',
      ],
    ],
    'tada' => [
      'type' => 'none',
      'user' => [
        'tadaNone',
      ],
    ],
    'greatIdea' => [
      'type' => 'choice',
      'user' => [
        'ohYes',
        'rustling',
      ],
      'emotion' => 'elated',
    ],
    'facebook' => [
      'type' => 'none',
      'user' => [
        'facebookNone',
      ],
    ],
    'brilliant' => [
      'type' => 'choice',
      'user' => [
        'brilliantNo',
        'brilliantReally',
      ],
    ],
    'everyPlatform' => [
      'type' => 'none',
      'user' => [
        'everyPlatformNone',
      ],
    ],
    'behindScenes' => [
      'type' => 'none',
      'user' => [
        'behindScenesNone',
      ],
    ],
    'proveUsers' => [
      'type' => 'choice',
      'user' => [
        'provePositive1',
        'provePositive2',
        'proveUnsure',
      ],
    ],
    'bigDeal' => [
      'type' => 'choice',
      'user' => [
        'provePositive1',
        'provePositive2',
        'bigDealUnsure',
        'bigDealNegative',
      ],
      'emotion' => 'base',
    ],
    'comeNow' => [
      'type' => 'choice',
      'user' => [
        'downsides',
        'notEnough',
      ],
      'emotion' => 'thumbs-up',
    ],
    'frustrationPic' => [
      'type' => 'none',
      'user' => [
        'frustrationPicNone',
      ],
      'emotion' => 'angry',
    ],
    'whoopPic' => [
      'type' => 'choice',
      'user' => [
        'whoopEmoji1',
        'whoopEmoji2',
      ],
    ],
    'goodThing' => [
      'type' => 'choice',
      'user' => [
        'goodThingPositive',
        'goodThingDo',
      ],
      'emotion' => 'clapping',
    ],
    'restOfUsers' => [
      'type' => 'none',
      'user' => [
        'restOfUsersNone',
      ],
    ],
    'government' => [
      'type' => 'none',
      'user' => [
        'governmentNone',
      ],
    ],
    'betterGo' => [
      'type' => 'choice',
      'user' => [
        'endGreat',
        'endCool',
      ],
    ],
    'ach' => [
      'type' => 'choice',
      'user' => [
        'tooMuchPower',
        'statusQuo',
        'somethingElse',
      ],
    ],
    'paranoid' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'moveOn' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'okWhat' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'enoughReason' => [
      'type' => 'textArea',
      'user' => [
        'enoughReasonText',
      ],
      'emotion' => 'frustrated',
    ],
    'oneWay' => [
      'type' => 'none',
      'user' => [
        'oneWayNone',
      ],
    ],
    'easierLife' => [
      'type' => 'choiceAndText',
      'user' => [
        'howIs',
        'otherText',
      ],
    ],
    'needOtherUsers' => [
      'type' => 'choice',
      'user' => [
        'otherUsersOk1',
        'otherUsersOk2',
      ],
    ],
    'whateverHappens' => [
      'type' => 'choice',
      'user' => [
        'endGreat',
        'endCool',
      ],
      'emotion' => 'base',
    ],
    'bye' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
      'emotion' => 'waving',
    ],
    'byeEnd' => [
      'type' => 'end',
      'user' => [
        'byeEndNone',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'hello1' => [
      'wanda' => 'glad',
    ],
    'hello2' => [
      'wanda' => 'glad',
    ],
    'gladNone' => [
      'wanda' => 'missMessages',
    ],
    'doI' => [
      'wanda' => 'analysing',
    ],
    'yeahTrue' => [
      'wanda' => 'analysing',
    ],
    'analysingNone' => [
      'wanda' => 'analysingPic',
    ],
    'analysingPicNone' => [
      'wanda' => 'pretty',
    ],
    'huh' => [
      'wanda' => 'missed',
    ],
    'whatMean' => [
      'wanda' => 'missed',
    ],
    'missedNone' => [
      'wanda' => 'invitations',
    ],
    'invitationsNone' => [
      'wanda' => 'birthdays',
    ],
    'birthdaysNone' => [
      'wanda' => 'niceMessages',
    ],
    'niceMessagesNone' => [
      'wanda' => 'neededHelp',
    ],
    'hmm' => [
      'wanda' => 'notBad',
    ],
    'ohDear' => [
      'wanda' => 'notBad',
    ],
    'notBadNone' => [
      'wanda' => 'lovely',
    ],
    'lovelyEmoji1' => [
      'wanda' => 'techProblem',
    ],
    'lovelyEmoji2' => [
      'wanda' => 'techProblem',
    ],
    'techAgree' => [
      'wanda' => 'comeIn',
    ],
    'techOk' => [
      'wanda' => 'comeIn',
    ],
    'comeInNone' => [
      'wanda' => 'tada',
    ],
    'tadaNone' => [
      'wanda' => 'greatIdea',
    ],
    'ohYes' => [
      'wanda' => 'facebook',
    ],
    'rustling' => [
      'wanda' => 'facebook',
    ],
    'facebookNone' => [
      'wanda' => 'brilliant',
    ],
    'brilliantNo' => [
      'wanda' => 'everyPlatform',
    ],
    'brilliantReally' => [
      'wanda' => 'everyPlatform',
    ],
    'everyPlatformNone' => [
      'wanda' => 'behindScenes',
    ],
    'behindScenesNone' => [
      'wanda' => 'proveUsers',
    ],
    'provePositive1' => [
      'wanda' => 'whoopPic',
    ],
    'provePositive2' => [
      'wanda' => 'whoopPic',
    ],
    'proveUnsure' => [
      'wanda' => 'bigDeal',
    ],
    'bigDealUnsure' => [
      'wanda' => 'comeNow',
    ],
    'bigDealNegative' => [
      'wanda' => 'comeNow',
    ],
    'downsides' => [
      'wanda' => 'frustrationPic',
    ],
    'notEnough' => [
      'wanda' => 'frustrationPic',
    ],
    'frustrationPicNone' => [
      'wanda' => 'ach',
    ],
    'whoopEmoji1' => [
      'wanda' => 'goodThing',
    ],
    'whoopEmoji2' => [
      'wanda' => 'goodThing',
    ],
    'goodThingPositive' => [
      'wanda' => 'restOfUsers',
    ],
    'goodThingDo' => [
      'wanda' => 'restOfUsers',
    ],
    'restOfUsersNone' => [
      'wanda' => 'government',
    ],
    'governmentNone' => [
      'wanda' => 'betterGo',
    ],
    'tooMuchPower' => [
      'wanda' => 'paranoid',
    ],
    'statusQuo' => [
      'wanda' => 'moveOn',
    ],
    'somethingElse' => [
      'wanda' => 'okWhat',
    ],
    'problemText' => [
      'wanda' => 'enoughReason',
    ],
    'enoughReasonText' => [
      'wanda' => 'oneWay',
    ],
    'oneWayNone' => [
      'wanda' => 'easierLife',
    ],
    'howIs' => [
      'wanda' => 'needOtherUsers',
    ],
    'otherText' => [
      'wanda' => 'needOtherUsers',
    ],
    'otherUsersOk1' => [
      'wanda' => 'whateverHappens',
    ],
    'otherUsersOk2' => [
      'wanda' => 'whateverHappens',
    ],
    'endGreat' => [
      'wanda' => 'bye',
    ],
    'endCool' => [
      'wanda' => 'bye',
    ],
    'bye1' => [
      'wanda' => 'byeEnd',
    ],
    'bye2' => [
      'wanda' => 'byeEnd',
    ],
    'byeEndNone' => [
      'wanda' => '',
    ],
  ],
  
];

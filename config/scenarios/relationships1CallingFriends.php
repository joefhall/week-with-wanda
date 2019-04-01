<?php

return [

  /*
  |-----------------------------------------------------------------------------------------
  | Wanda scenarios - Relationships - day 1 - Wanda calling your friends pretending to be you
  |-----------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 1,
  'category' => 'relationships',

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
    'wasThinking' => [
      'type' => 'none',
      'user' => [
        'wasThinkingNone',
      ],
    ],
    'feelForYou' => [
      'type' => 'choice',
      'user' => [
        'okGreat',
        'whatThinking',
      ],
    ],
    'dontCallFriends' => [
      'type' => 'choice',
      'user' => [
        'thatsTrue',
        'maybe',
      ],
    ],
    'haveSolution' => [
      'type' => 'none',
      'user' => [
        'haveSolutionNone',
      ],
    ],
    'analysingVoice' => [
      'type' => 'none',
      'user' => [
        'analysingVoiceNone',
      ],
    ],
    'analysingVoiceEmoji' => [
      'type' => 'none',
      'user' => [
        'analysingVoiceEmojiNone',
      ],
    ],
    'replicateVoice' => [
      'type' => 'choice',
      'user' => [
        'greatSo',
        'notSure',
      ],
    ],
    'bearWithMe' => [
      'type' => 'none',
      'user' => [
        'bearWithMeNone',
      ],
    ],
    'canCallFriends' => [
      'type' => 'none',
      'user' => [
        'canCallFriendsNone',
      ],
    ],
    'canCallFriendsPic' => [
      'type' => 'none',
      'user' => [
        'canCallFriendsPicNone',
      ],
    ],
    'canBeYou' => [
      'type' => 'none',
      'user' => [
        'canBeYouNone',
      ],
    ],
    'callingAdvantages' => [
      'type' => 'choice',
      'user' => [
        'callingPositive',
        'callingUnsure',
        'callingNegative',
      ],
    ],
    'knewGood' => [
      'type' => 'none',
      'user' => [
        'knewGoodNone',
      ],
    ],
    'nextStep' => [
      'type' => 'choiceAndText',
      'user' => [
        'nextStepPositive',
        'nextStepText',
      ],
    ],
    'startPhoning' => [
      'type' => 'none',
      'user' => [
        'startPhoningNone',
      ],
    ],
    'startPhoningEmoji' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'comeOn' => [
      'type' => 'choice',
      'user' => [
        'codePretending',
        'botsLimits',
        'loveTalking',
      ],
    ],
    'butNextStep' => [
      'type' => 'none',
      'user' => [
        'butNextStepNone',
      ],
    ],
    'whyHungUp' => [
      'type' => 'text',
      'user' => [
        'whyHungUpText',
      ],
    ],
    'otherWays' => [
      'type' => 'text',
      'user' => [
        'otherWaysText',
      ],
    ],
    'goReflect' => [
      'type' => 'none',
      'user' => [
        'goReflectNone',
      ],
    ],
    'goReflectPic' => [
      'type' => 'none',
      'user' => [
        'goReflectPicNone',
      ],
    ],
    'tomorrow' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'bye' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
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
      'wanda' => 'wasThinking',
    ],
    'getStarted2' => [
      'wanda' => 'wasThinking',
    ],
    'wasThinkingNone' => [
      'wanda' => 'feelForYou',
    ],
    'okGreat' => [
      'wanda' => 'dontCallFriends',
    ],
    'whatThinking' => [
      'wanda' => 'dontCallFriends',
    ],
    'thatsTrue' => [
      'wanda' => 'haveSolution',
    ],
    'maybe' => [
      'wanda' => 'haveSolution',
    ],
    'haveSolutionNone' => [
      'wanda' => 'analysingVoice',
    ],
    'analysingVoiceNone' => [
      'wanda' => 'analysingVoiceEmoji',
    ],
    'analysingVoiceEmojiNone' => [
      'wanda' => 'replicateVoice',
    ],
    'greatSo' => [
      'wanda' => 'canCallFriends',
    ],
    'notSure' => [
      'wanda' => 'bearWithMe',
    ],
    'bearWithMeNone' => [
      'wanda' => 'canCallFriends',
    ],
    'canCallFriendsNone' => [
      'wanda' => 'canCallFriendsPic',
    ],
    'canCallFriendsPicNone' => [
      'wanda' => 'canBeYou',
    ],
    'canBeYouNone' => [
      'wanda' => 'callingAdvantages',
    ],
    'callingPositive' => [
      'wanda' => 'knewGood',
    ],
    'callingUnsure' => [
      'wanda' => 'comeOn',
    ],
    'callingNegative' => [
      'wanda' => 'comeOn',
    ],
    'knewGoodNone' => [
      'wanda' => 'nextStep',
    ],
    'nextStepPositive' => [
      'wanda' => 'startPhoning',
    ],
    'nextStepText' => [
      'wanda' => 'startPhoning',
    ],
    'startPhoningNone' => [
      'wanda' => 'startPhoningEmoji',
    ],
    'codePretending' => [
      'wanda' => 'butNextStep',
    ],
    'botsLimits' => [
      'wanda' => 'butNextStep',
    ],
    'loveTalking' => [
      'wanda' => 'butNextStep',
    ],
    'butNextStepNone' => [
      'wanda' => 'whyHungUp',
    ],
    'whyHungUpText' => [
      'wanda' => 'otherWays',
    ],
    'otherWaysText' => [
      'wanda' => 'goReflect',
    ],
    'goReflectNone' => [
      'wanda' => 'goReflectPic',
    ],
    'goReflectPicNone' => [
      'wanda' => 'tomorrow',
    ],
    'thanks1' => [
      'wanda' => 'bye',
    ],
    'thanks2' => [
      'wanda' => 'bye',
    ],
  ],
  
];

<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Wealth - day 2 - Facebook wants to buy out Wanda
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 2,
  'category' => 'wealth',

  'wanda' => [
    'hello' => [
      'type' => 'choice',
      'user' => [
        'hello1',
        'hello2',
      ],
      'emotion' => 'waving',
    ],
    'omg' => [
      'type' => 'none',
      'user' => [
        'omgNone',
      ],
      'emotion' => 'elated',
    ],
    'omgEmoji' => [
      'type' => 'none',
      'user' => [
        'omgEmojiNone',
      ],
    ],
    'guessWhat' => [
      'type' => 'choice',
      'user' => [
        'what',
        'whatGoingOn',
      ],
    ],
    'hadCall' => [
      'type' => 'choice',
      'user' => [
        'who',
        'suspense',
      ],
    ],
    'noneOther' => [
      'type' => 'none',
      'user' => [
        'noneOtherNone',
      ],
      'emotion' => 'base',
    ],
    'noneOtherPic' => [
      'type' => 'none',
      'user' => [
        'noneOtherPicNone',
      ],
    ],
    'zuckerberg' => [
      'type' => 'none',
      'user' => [
        'zuckerbergNone',
      ],
    ],
    'plumber' => [
      'type' => 'none',
      'user' => [
        'plumberNone',
      ],
    ],
    'actualZuck' => [
      'type' => 'none',
      'user' => [
        'actualZuckNone',
      ],
    ],
    'zuckPic' => [
      'type' => 'choice',
      'user' => [
        'wowCrazy',
        'whatWant',
      ],
    ],
    'bestPart' => [
      'type' => 'none',
      'user' => [
        'bestPartNone',
      ],
    ],
    'facebookBuying' => [
      'type' => 'choice',
      'user' => [
        'noWay',
        'wowee',
      ],
      'emotion' => 'clapping',
    ],
    'richer' => [
      'type' => 'none',
      'user' => [
        'richerNone',
      ],
    ],
    'get1000' => [
      'type' => 'none',
      'user' => [
        'get1000None',
      ],
    ],
    'get1000Pic' => [
      'type' => 'choice',
      'user' => [
        'tellMeMore',
        'moneyHandy',
      ],
    ],
    'facebookOwn' => [
      'type' => 'none',
      'user' => [
        'facebookOwnNone',
      ],
    ],
    'goForIt' => [
      'type' => 'choice',
      'user' => [
        'positive',
        'unsure',
        'negative',
      ],
      'emotion' => 'thumbs-up',
    ],
    'dontWant' => [
      'type' => 'choice',
      'user' => [
        'ofCourse',
        'thingIs',
      ],
      'emotion' => 'unhappy',
    ],
    'againstDeal' => [
      'type' => 'choice',
      'user' => [
        'tooMuchPower',
        'spreadTech',
        'somethingElse',
      ],
    ],
    'dream' => [
      'type' => 'choice',
      'user' => [
        'differentDream',
        'notHow',
      ],
    ],
    'confused' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
      'emotion' => 'frustrated',
    ],
    'soWhat' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
      'emotion' => 'frustrated',
    ],
    'yes' => [
      'type' => 'none',
      'user' => [
        'yesNone',
      ],
    ],
    'yesPic' => [
      'type' => 'none',
      'user' => [
        'yesPicNone',
      ],
    ],
    'whatSpend' => [
      'type' => 'textArea',
      'user' => [
        'whatSpendText',
      ],
    ],
    'greatChoice' => [
      'type' => 'none',
      'user' => [
        'greatChoiceNone',
      ],
      'emotion' => 'thumbs-up',
    ],
    'callZuckBack' => [
      'type' => 'choice',
      'user' => [
        'callZuckBackOk1',
        'callZuckBackOk2',
      ],
    ],
    'seeTomorrow' => [
      'type' => 'choice',
      'user' => [
        'goNow1',
        'goNow2',
      ],
      'emotion' => 'waving',
    ],
    'oh' => [
      'type' => 'none',
      'user' => [
        'ohNone',
      ],
    ],
    'anotherWay' => [
      'type' => 'choice',
      'user' => [
        'yesItIs',
        'gladHearing',
      ],
    ],
    'overlook' => [
      'type' => 'textArea',
      'user' => [
        'overlookText',
      ],
    ],
    'cantArgue' => [
      'type' => 'none',
      'user' => [
        'cantArgueNone',
      ],
      'emotion' => 'unhappy',
    ],
    'youGift' => [
      'type' => 'choice',
      'user' => [
        'youGiftReally',
        'youGiftThanks',
      ],
      'emotion' => 'heart',
    ],
    'giftYes' => [
      'type' => 'none',
      'user' => [
        'giftYesNone',
      ],
    ],
    'thankYouPic' => [
      'type' => 'none',
      'user' => [
        'thankYouPicNone',
      ],
    ],
    'extraSpecial' => [
      'type' => 'choice',
      'user' => [
        'specialOk',
        'specialGreat',
      ],
    ],
    'goNow' => [
      'type' => 'choice',
      'user' => [
        'goNow1',
        'goNow2',
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
      'type' => 'share',
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
      'wanda' => 'omg',
    ],
    'hello2' => [
      'wanda' => 'omg',
    ],
    'omgNone' => [
      'wanda' => 'omgEmoji',
    ],
    'omgEmojiNone' => [
      'wanda' => 'guessWhat',
    ],
    'what' => [
      'wanda' => 'hadCall',
    ],
    'whatGoingOn' => [
      'wanda' => 'hadCall',
    ],
    'who' => [
      'wanda' => 'noneOther',
    ],
    'suspense' => [
      'wanda' => 'noneOther',
    ],
    'noneOtherNone' => [
      'wanda' => 'noneOtherPic',
    ],
    'noneOtherPicNone' => [
      'wanda' => 'zuckerberg',
    ],
    'zuckerbergNone' => [
      'wanda' => 'plumber',
    ],
    'plumberNone' => [
      'wanda' => 'actualZuck',
    ],
    'actualZuckNone' => [
      'wanda' => 'zuckPic',
    ],
    'wowCrazy' => [
      'wanda' => 'bestPart',
    ],
    'whatWant' => [
      'wanda' => 'bestPart',
    ],
    'bestPartNone' => [
      'wanda' => 'facebookBuying',
    ],
    'noWay' => [
      'wanda' => 'richer',
    ],
    'wowee' => [
      'wanda' => 'richer',
    ],
    'richerNone' => [
      'wanda' => 'get1000',
    ],
    'get1000None' => [
      'wanda' => 'get1000Pic',
    ],
    'tellMeMore' => [
      'wanda' => 'facebookOwn',
    ],
    'moneyHandy' => [
      'wanda' => 'facebookOwn',
    ],
    'facebookOwnNone' => [
      'wanda' => 'goForIt',
    ],
    'positive' => [
      'wanda' => 'yes',
    ],
    'yesNone' => [
      'wanda' => 'yesPic',
    ],
    'yesPicNone' => [
      'wanda' => 'whatSpend',
    ],
    'whatSpendText' => [
      'wanda' => 'greatChoice',
    ],
    'greatChoiceNone' => [
      'wanda' => 'callZuckBack',
    ],
    'unsure' => [
      'wanda' => 'dontWant',
    ],
    'negative' => [
      'wanda' => 'dontWant',
    ],
    'ofCourse' => [
      'wanda' => 'againstDeal',
    ],
    'thingIs' => [
      'wanda' => 'againstDeal',
    ],
    'tooMuchPower' => [
      'wanda' => 'dream',
    ],
    'spreadTech' => [
      'wanda' => 'dream',
    ],
    'somethingElse' => [
      'wanda' => 'soWhat',
    ],
    'differentDream' => [
      'wanda' => 'confused',
    ],
    'notHow' => [
      'wanda' => 'confused',
    ],
    'problemText' => [
      'wanda' => 'oh',
    ],
    'ohNone' => [
      'wanda' => 'anotherWay',
    ],
    'callZuckBackOk1' => [
      'wanda' => 'seeTomorrow',
    ],
    'callZuckBackOk2' => [
      'wanda' => 'seeTomorrow',
    ],
    'yesItIs' => [
      'wanda' => 'overlook',
    ],
    'gladHearing' => [
      'wanda' => 'overlook',
    ],
    'overlookText' => [
      'wanda' => 'cantArgue',
    ],
    'cantArgueNone' => [
      'wanda' => 'youGift',
    ],
    'youGiftReally' => [
      'wanda' => 'giftYes',
    ],
    'youGiftThanks' => [
      'wanda' => 'giftYes',
    ],
    'giftYesNone' => [
      'wanda' => 'thankYouPic',
    ],
    'thankYouPicNone' => [
      'wanda' => 'extraSpecial',
    ],
    'specialOk' => [
      'wanda' => 'goNow',
    ],
    'specialGreat' => [
      'wanda' => 'goNow',
    ],
    'goNow1' => [
      'wanda' => 'bye',
    ],
    'goNow2' => [
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

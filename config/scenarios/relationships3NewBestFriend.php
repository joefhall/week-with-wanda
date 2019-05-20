<?php

return [

  /*
  |-------------------------------------------------------------------------------------------------------
  | Wanda scenarios - Relationships - day 3 - Wanda has found you a new best friend
  |-------------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 3,
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
      'emotion' => 'complimenting',
    ],
    'wantRels' => [
      'type' => 'none',
      'user' => [
        'wantRelsNone',
      ],
    ],
    'needLove' => [
      'type' => 'none',
      'user' => [
        'needLoveNone',
      ],
      'emotion' => 'heart',
    ],
    'love' => [
      'type' => 'none',
      'user' => [
        'loveNone',
      ],
    ],
    'iDo' => [
      'type' => 'none',
      'user' => [
        'iDoNone',
      ],
    ],
    'anyhow' => [
      'type' => 'none',
      'user' => [
        'anyhowNone',
      ],
    ],
    'whatHappier' => [
      'type' => 'choice',
      'user' => [
        'yes',
        'what',
      ],
    ],
    'newBest' => [
      'type' => 'none',
      'user' => [
        'newBestNone',
      ],
      'emotion' => 'thumbs-up',
    ],
    'justAnyone' => [
      'type' => 'choice',
      'user' => [
        'noWay',
        'courseNot',
      ],
    ],
    'scaryWorld' => [
      'type' => 'none',
      'user' => [
        'scaryWorldNone',
      ],
      'emotion' => 'unhappy',
    ],
    'dontStart' => [
      'type' => 'none',
      'user' => [
        'dontStartNone',
      ],
    ],
    'shockedPic' => [
      'type' => 'none',
      'user' => [
        'shockedPicNone',
      ],
    ],
    'homework' => [
      'type' => 'none',
      'user' => [
        'homeworkNone',
      ],
      'emotion' => 'base',
    ],
    'hereHeIs' => [
      'type' => 'none',
      'user' => [
        'hereHeIsNone',
      ],
    ],
    'friendPic' => [
      'type' => 'none',
      'user' => [
        'friendPicNone',
      ],
      'emotion' => 'thumbs-up',
    ],
    'meet' => [
      'type' => 'none',
      'user' => [
        'meetNone',
      ],
    ],
    'tellYou' => [
      'type' => 'choice',
      'user' => [
        'howMatch',
        'whoIs',
      ],
    ],
    'well' => [
      'type' => 'none',
      'user' => [
        'wellNone',
      ],
      'emotion' => 'base',
    ],
    'knowMuch' => [
      'type' => 'none',
      'user' => [
        'knowMuchNone',
      ],
    ],
    'othersLocally' => [
      'type' => 'none',
      'user' => [
        'othersLocallyNone',
      ],
    ],
    'bothShop' => [
      'type' => 'none',
      'user' => [
        'bothShopNone',
      ],
    ],
    'bothEat' => [
      'type' => 'none',
      'user' => [
        'bothEatNone',
      ],
    ],
    'bothTV' => [
      'type' => 'none',
      'user' => [
        'bothTVNone',
      ],
    ],
    'smiles' => [
      'type' => 'none',
      'user' => [
        'smilesNone',
      ],
    ],
    'bothJokes' => [
      'type' => 'none',
      'user' => [
        'bothJokesNone',
      ],
    ],
    'laughingPic' => [
      'type' => 'none',
      'user' => [
        'laughingPicNone',
      ],
    ],
    'soExcited' => [
      'type' => 'choice',
      'user' => [
        'soundsGreat',
        'unsure',
      ],
      'emotion' => 'clapping',
    ],
    'doesntHe' => [
      'type' => 'none',
      'user' => [
        'doesntHeNone',
      ],
    ],
    'setUp' => [
      'type' => 'choice',
      'user' => [
        'positive',
        'negative',
      ],
      'emotion' => 'base',
    ],
    'address' => [
      'type' => 'choice',
      'user' => [
        'addressYes',
        'addressNo',
      ],
    ],
    'addressGreat' => [
      'type' => 'none',
      'user' => [
        'addressNone',
      ],
    ],
    'addressOk' => [
      'type' => 'none',
      'user' => [
        'addressNone',
      ],
    ],
    'fabSetUp' => [
      'type' => 'none',
      'user' => [
        'fabSetUpNone',
      ],
    ],
    'goodFeeling' => [
      'type' => 'none',
      'user' => [
        'goodFeelingNone',
      ],
    ],
    'whenListening' => [
      'type' => 'choice',
      'user' => [
        'listeningGreat',
        'listeningWhat',
      ],
      'emotion' => 'thumbs-up',
    ],
    'allDone' => [
      'type' => 'none',
      'user' => [
        'allDoneNone',
      ],
      'emotion' => 'base',
    ],
    'tomorrow' => [
      'type' => 'none',
      'user' => [
        'tomorrowNone',
      ],
    ],
    'tomorrowEmoji' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
    ],
    'listeningOfCourse' => [
      'type' => 'none',
      'user' => [
        'listeningOfCourseNone',
      ],
    ],
    'knowSoMany' => [
      'type' => 'choice',
      'user' => [
        'knowOk',
        'knowWhat',
      ],
    ],
    'bestAI' => [
      'type' => 'none',
      'user' => [
        'bestAINone',
      ],
      'emotion' => 'base',
    ],
    'learningAI' => [
      'type' => 'none',
      'user' => [
        'learningAINone',
      ],
    ],
    'trackLocation' => [
      'type' => 'none',
      'user' => [
        'trackLocationNone',
      ],
    ],
    'knowShops' => [
      'type' => 'none',
      'user' => [
        'knowShopsNone',
      ],
    ],
    'accessEmails' => [
      'type' => 'none',
      'user' => [
        'accessEmailsNone',
      ],
    ],
    'listenEmotions' => [
      'type' => 'none',
      'user' => [
        'listenEmotionsNone',
      ],
    ],
    'howHelp' => [
      'type' => 'choice',
      'user' => [
        'howHelpOk',
        'howHelpUncomfortable',
      ],
    ],
    'makingBetter' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
      'emotion' => 'unhappy',
    ],
    'ownOpinion' => [
      'type' => 'none',
      'user' => [
        'ownOpinionNone',
      ],
    ],
    'ownOpinionEmoji' => [
      'type' => 'none',
      'user' => [
        'ownOpinionEmojiNone',
      ],
    ],
    'someData' => [
      'type' => 'choice',
      'user' => [
        'someDataPositive',
        'someDataNegative',
      ],
    ],
    'whereLine' => [
      'type' => 'textArea',
      'user' => [
        'privacyText',
      ],
    ],
    'hermit' => [
      'type' => 'none',
      'user' => [
        'hermitNone',
      ],
      'emotion' => 'frustrated',
    ],
    'hermitPic' => [
      'type' => 'none',
      'user' => [
        'hermitPicNone',
      ],
    ],
    'whyFeel' => [
      'type' => 'textArea',
      'user' => [
        'privacyText',
      ],
    ],
    'mmm' => [
      'type' => 'none',
      'user' => [
        'mmmNone',
      ],
      'emotion' => 'unhappy',
    ],
    'mmmPic' => [
      'type' => 'none',
      'user' => [
        'mmmPicNone',
      ],
    ],
    'interesting' => [
      'type' => 'none',
      'user' => [
        'interestingNone',
      ],
    ],
    'restricts' => [
      'type' => 'none',
      'user' => [
        'restrictsNone',
      ],
    ],
    'chew' => [
      'type' => 'choice',
      'user' => [
        'chewOk',
        'chew Great',
      ],
    ],
    'haveThink' => [
      'type' => 'none',
      'user' => [
        'haveThinkNone',
      ],
    ],
    'ifListening' => [
      'type' => 'choice',
      'user' => [
        'listeningGreat',
        'listeningWhat',
      ],
      'emotion' => 'thumbs-up',
    ],
    'bye' => [
      'type' => 'share',
      'user' => [
        'byeNone',
      ],
      'emotion' => 'waving',
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
      'wanda' => 'wantRels',
    ],
    'getStarted2' => [
      'wanda' => 'wantRels',
    ],
    'wantRelsNone' => [
      'wanda' => 'needLove',
    ],
    'needLoveNone' => [
      'wanda' => 'love',
    ],
    'loveNone' => [
      'wanda' => 'iDo',
    ],
    'iDoNone' => [
      'wanda' => 'anyhow',
    ],
    'anyhowNone' => [
      'wanda' => 'whatHappier',
    ],
    'yes' => [
      'wanda' => 'newBest',
    ],
    'what' => [
      'wanda' => 'newBest',
    ],
    'newBestNone' => [
      'wanda' => 'justAnyone',
    ],
    'noWay' => [
      'wanda' => 'scaryWorld',
    ],
    'courseNot' => [
      'wanda' => 'scaryWorld',
    ],
    'scaryWorldNone' => [
      'wanda' => 'dontStart',
    ],
    'dontStartNone' => [
      'wanda' => 'shockedPic',
    ],
    'shockedPicNone' => [
      'wanda' => 'homework',
    ],
    'homeworkNone' => [
      'wanda' => 'hereHeIs',
    ],
    'hereHeIsNone' => [
      'wanda' => 'friendPic',
    ],
    'friendPicNone' => [
      'wanda' => 'meet',
    ],
    'meetNone' => [
      'wanda' => 'tellYou',
    ],
    'howMatch' => [
      'wanda' => 'well',
    ],
    'whoIs' => [
      'wanda' => 'well',
    ],
    'wellNone' => [
      'wanda' => 'knowMuch',
    ],
    'knowMuchNone' => [
      'wanda' => 'othersLocally',
    ],
    'othersLocallyNone' => [
      'wanda' => 'bothShop',
    ],
    'bothShopNone' => [
      'wanda' => 'bothEat',
    ],
    'bothEatNone' => [
      'wanda' => 'bothTV',
    ],
    'bothTVNone' => [
      'wanda' => 'smiles',
    ],
    'smilesNone' => [
      'wanda' => 'bothJokes',
    ],
    'bothJokesNone' => [
      'wanda' => 'laughingPic',
    ],
    'laughingPicNone' => [
      'wanda' => 'soExcited',
    ],
    'soundsGreat' => [
      'wanda' => 'doesntHe',
    ],
    'unsure' => [
      'wanda' => 'haveThink',
    ],
    'doesntHeNone' => [
      'wanda' => 'setUp',
    ],
    'positive' => [
      'wanda' => 'address',
    ],
    'negative' => [
      'wanda' => 'haveThink',
    ],
    'addressYes' => [
      'wanda' => 'addressGreat',
    ],
    'addressNo' => [
      'wanda' => 'addressOk',
    ],
    'addressNone' => [
      'wanda' => 'fabSetUp',
    ],
    'fabSetUpNone' => [
      'wanda' => 'goodFeeling',
    ],
    'goodFeelingNone' => [
      'wanda' => 'whenListening',
    ],
    'listeningGreat' => [
      'wanda' => 'allDone',
    ],
    'listeningWhat' => [
      'wanda' => 'listeningOfCourse',
    ],
    'allDoneNone' => [
      'wanda' => 'tomorrow',
    ],
    'tomorrowNone' => [
      'wanda' => 'tomorrowEmoji',
    ],
    'bye1' => [
      'wanda' => 'bye',
    ],
    'bye2' => [
      'wanda' => 'bye',
    ],
    'listeningOfCourseNone' => [
      'wanda' => 'knowSoMany',
    ],
    'knowOk' => [
      'wanda' => 'allDone',
    ],
    'knowWhat' => [
      'wanda' => 'bestAI',
    ],
    'bestAINone' => [
      'wanda' => 'learningAI',
    ],
    'learningAINone' => [
      'wanda' => 'trackLocation',
    ],
    'trackLocationNone' => [
      'wanda' => 'knowShops',
    ],
    'knowShopsNone' => [
      'wanda' => 'accessEmails',
    ],
    'accessEmailsNone' => [
      'wanda' => 'listenEmotions',
    ],
    'listenEmotionsNone' => [
      'wanda' => 'howHelp',
    ],
    'howHelpOk' => [
      'wanda' => 'allDone',
    ],
    'howHelpUncomfortable' => [
      'wanda' => 'makingBetter',
    ],
    'problemText' => [
      'wanda' => 'ownOpinion',
    ],
    'ownOpinionNone' => [
      'wanda' => 'ownOpinionEmoji',
    ],
    'ownOpinionEmojiNone' => [
      'wanda' => 'someData',
    ],
    'someDataPositive' => [
      'wanda' => 'whereLine',
    ],
    'someDataNegative' => [
      'wanda' => 'hermit',
    ],
    'hermitNone' => [
      'wanda' => 'hermitPic',
    ],
    'hermitPicNone' => [
      'wanda' => 'whyFeel',
    ],
    'privacyText' => [
      'wanda' => 'mmm',
    ],
    'mmmNone' => [
      'wanda' => 'mmmPic',
    ],
    'mmmPicNone' => [
      'wanda' => 'interesting',
    ],
    'interestingNone' => [
      'wanda' => 'restricts',
    ],
    'restrictsNone' => [
      'wanda' => 'chew',
    ],
    'chewOk' => [
      'wanda' => 'allDone',
    ],
    'chew Great' => [
      'wanda' => 'allDone',
    ],
    'haveThinkNone' => [
      'wanda' => 'ifListening',
    ],
    'byeNone' => [
      'wanda' => '',
    ],
  ],
  
];

<?php

return [

  /*
  |--------------------------------------------------------------------------------------------------
  | Wanda scenarios - Wealth - day 3 - Wanda wants to make you money by selling your location data
  |--------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 3,
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
    'freeCash' => [
      'type' => 'none',
      'user' => [
        'freeCashNone',
      ],
    ],
    'freeCashEmoji' => [
      'type' => 'none',
      'user' => [
        'freeCashEmojiNone',
      ],
    ],
    'wannaKnow' => [
      'type' => 'choice',
      'user' => [
        'yeahGreat',
        'tellAll',
      ],
      'emotion' => 'base',
    ],
    'walkingPic' => [
      'type' => 'none',
      'user' => [
        'walkingPicNone',
      ],
    ],
    'allData' => [
      'type' => 'none',
      'user' => [
        'allDataNone',
      ],
    ],
    'everywhere' => [
      'type' => 'none',
      'user' => [
        'everywhereNone',
      ],
    ],
    'onlyCountry' => [
      'type' => 'none',
      'user' => [
        'onlyCountryNone',
      ],
    ],
    'turnsOut' => [
      'type' => 'none',
      'user' => [
        'turnsOutNone',
      ],
    ],
    'calculatingPic' => [
      'type' => 'none',
      'user' => [
        'calculatingPicNone',
      ],
    ],
    'amount' => [
      'type' => 'choice',
      'user' => [
        'who',
        'whatAbout',
      ],
    ],
    'greatQuestion' => [
      'type' => 'none',
      'user' => [
        'greatQuestionNone',
      ],
    ],
    'noFear' => [
      'type' => 'none',
      'user' => [
        'noFearNone',
      ],
    ],
    'whatSay' => [
      'type' => 'choice',
      'user' => [
        'positive',
        'initialNegative',
      ],
    ],
    'hardToGet' => [
      'type' => 'none',
      'user' => [
        'hardToGetNone',
      ],
      'emotion' => 'complimenting',
    ],
    'hardToGetEmoji' => [
      'type' => 'none',
      'user' => [
        'hardToGetEmojiNone',
      ],
    ],
    'betterPrice' => [
      'type' => 'choice',
      'user' => [
        'price75',
        'price100',
        'price150',
        'secondNegative',
      ],
    ],
    'hardBargain' => [
      'type' => 'choice',
      'user' => [
        'price250',
        'price500',
        'price1000',
        'thirdNegative',
      ],
    ],
    'onIt' => [
      'type' => 'none',
      'user' => [
        'onItNone',
      ],
      'emotion' => 'thumbs-up',
    ],
    'cookie' => [
      'type' => 'none',
      'user' => [
        'cookieNone',
      ],
    ],
    'cookiePic' => [
      'type' => 'none',
      'user' => [
        'cookiePicNone',
      ],
    ],
    'sendNow' => [
      'type' => 'choice',
      'user' => [
        'sendThanks1',
        'sendThanks2',
      ],
      'emotion' => 'base',
    ],
    'together' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
    ],
    'tough' => [
      'type' => 'choice',
      'user' => [
        'price5000',
        'price20000',
        'price100000',
        'fourthNegative',
      ],
    ],
    'omgReally' => [
      'type' => 'textAndChoice',
      'user' => [
        'priceText',
        'noPrice',
      ],
    ],
    'huh' => [
      'type' => 'none',
      'user' => [
        'huhNone',
      ],
      'emotion' => 'shocked',
    ],
    'huhPic' => [
      'type' => 'none',
      'user' => [
        'huhPicNone',
      ],
    ],
    'principled' => [
      'type' => 'none',
      'user' => [
        'principledNone',
      ],
    ],
    'sitesApps' => [
      'type' => 'choice',
      'user' => [
        'iDo',
        'true',
      ],
    ],
    'research' => [
      'type' => 'none',
      'user' => [
        'researchNone',
      ],
      'emotion' => 'unhappy',
    ],
    'goodThing' => [
      'type' => 'none',
      'user' => [
        'goodThingNone',
      ],
      'emotion' => 'base',
    ],
    'goodThingPic' => [
      'type' => 'choice',
      'user' => [
        'okReally',
        'youWrong',
      ],
    ],
    'foolproof' => [
      'type' => 'choice',
      'user' => [
        'ok1',
        'ok2',
      ],
      'emotion' => 'base',
    ],
    'missedOut' => [
      'type' => 'none',
      'user' => [
        'missedOutNone',
      ],
    ],
    'holdAgainst' => [
      'type' => 'none',
      'user' => [
        'holdAgainstNone',
      ],
    ],
    'holdAgainstEmoji' => [
      'type' => 'none',
      'user' => [
        'holdAgainstEmojiNone',
      ],
    ],
    'seeTomorrow' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
    ],
    'dontWrong' => [
      'type' => 'choice',
      'user' => [
        'noMistake',
        'sellWrong',
      ],
      'emotion' => 'unhappy',
    ],
    'youSure' => [
      'type' => 'choice',
      'user' => [
        'youSureNo',
        'youSureYes',
      ],
    ],
    'howCome' => [
      'type' => 'textArea',
      'user' => [
        'howComeText',
      ],
      'emotion' => 'frustrated',
    ],
    'moneyWorld' => [
      'type' => 'none',
      'user' => [
        'moneyWorldNone',
      ],
    ],
    'moneyWorldEmoji' => [
      'type' => 'none',
      'user' => [
        'moneyWorldEmojiNone',
      ],
    ],
    'whyCare' => [
      'type' => 'textArea',
      'user' => [
        'whyCareText',
      ],
    ],
    'treasure' => [
      'type' => 'none',
      'user' => [
        'treasureNone',
      ],
      'emotion' => 'heart',
    ],
    'mix' => [
      'type' => 'none',
      'user' => [
        'mixNone',
      ],
      'emotion' => 'base',
    ],
    'mixPic' => [
      'type' => 'choice',
      'user' => [
        'mixThanks1',
        'mixThanks2',
      ],
    ],
    'manana' => [
      'type' => 'none',
      'user' => [
        'mananaNone',
      ],
    ],
    'mananaEmoji' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
    ],
    'bye' => [
      'type' => 'none',
      'user' => [
        'byeNone',
      ],
      'emotion' => 'waving',
    ],
    'survey' => [
      'type' => 'none',
      'user' => [
        'surveyNone',
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
      'wanda' => 'freeCash',
    ],
    'getStarted2' => [
      'wanda' => 'freeCash',
    ],
    'freeCashNone' => [
      'wanda' => 'freeCashEmoji',
    ],
    'freeCashEmojiNone' => [
      'wanda' => 'wannaKnow',
    ],
    'yeahGreat' => [
      'wanda' => 'walkingPic',
    ],
    'tellAll' => [
      'wanda' => 'walkingPic',
    ],
    'walkingPicNone' => [
      'wanda' => 'allData',
    ],
    'allDataNone' => [
      'wanda' => 'everywhere',
    ],
    'everywhereNone' => [
      'wanda' => 'onlyCountry',
    ],
    'onlyCountryNone' => [
      'wanda' => 'turnsOut',
    ],
    'turnsOutNone' => [
      'wanda' => 'calculatingPic',
    ],
    'calculatingPicNone' => [
      'wanda' => 'amount',
    ],
    'who' => [
      'wanda' => 'greatQuestion',
    ],
    'whatAbout' => [
      'wanda' => 'greatQuestion',
    ],
    'greatQuestionNone' => [
      'wanda' => 'noFear',
    ],
    'noFearNone' => [
      'wanda' => 'whatSay',
    ],
    'positive' => [
      'wanda' => 'onIt',
    ],
    'initialNegative' => [
      'wanda' => 'hardToGet',
    ],
    'hardToGetNone' => [
      'wanda' => 'hardToGetEmoji',
    ],
    'hardToGetEmojiNone' => [
      'wanda' => 'betterPrice',
    ],
    'price75' => [
      'wanda' => 'onIt',
    ],
    'price100' => [
      'wanda' => 'onIt',
    ],
    'price150' => [
      'wanda' => 'onIt',
    ],
    'secondNegative' => [
      'wanda' => 'hardBargain',
    ],
    'price250' => [
      'wanda' => 'onIt',
    ],
    'price500' => [
      'wanda' => 'onIt',
    ],
    'price1000' => [
      'wanda' => 'onIt',
    ],
    'thirdNegative' => [
      'wanda' => 'tough',
    ],
    'onItNone' => [
      'wanda' => 'cookie',
    ],
    'cookieNone' => [
      'wanda' => 'cookiePic',
    ],
    'cookiePicNone' => [
      'wanda' => 'sendNow',
    ],
    'sendThanks1' => [
      'wanda' => 'together',
    ],
    'sendThanks2' => [
      'wanda' => 'together',
    ],
    'bye1' => [
      'wanda' => 'bye',
    ],
    'bye2' => [
      'wanda' => 'bye',
    ],
    'price5000' => [
      'wanda' => 'onIt',
    ],
    'price20000' => [
      'wanda' => 'onIt',
    ],
    'price100000' => [
      'wanda' => 'onIt',
    ],
    'fourthNegative' => [
      'wanda' => 'omgReally',
    ],
    'priceText' => [
      'wanda' => 'onIt',
    ],
    'noPrice' => [
      'wanda' => 'huh',
    ],
    'huhNone' => [
      'wanda' => 'huhPic',
    ],
    'huhPicNone' => [
      'wanda' => 'principled',
    ],
    'principledNone' => [
      'wanda' => 'sitesApps',
    ],
    'iDo' => [
      'wanda' => 'research',
    ],
    'true' => [
      'wanda' => 'research',
    ],
    'researchNone' => [
      'wanda' => 'goodThing',
    ],
    'goodThingNone' => [
      'wanda' => 'goodThingPic',
    ],
    'okReally' => [
      'wanda' => 'foolproof',
    ],
    'youWrong' => [
      'wanda' => 'dontWrong',
    ],
    'ok1' => [
      'wanda' => 'missedOut',
    ],
    'ok2' => [
      'wanda' => 'missedOut',
    ],
    'missedOutNone' => [
      'wanda' => 'holdAgainst',
    ],
    'holdAgainstNone' => [
      'wanda' => 'holdAgainstEmoji',
    ],
    'holdAgainstEmojiNone' => [
      'wanda' => 'seeTomorrow',
    ],
    'noMistake' => [
      'wanda' => 'foolproof',
    ],
    'sellWrong' => [
      'wanda' => 'youSure',
    ],
    'youSureNo' => [
      'wanda' => 'foolproof',
    ],
    'youSureYes' => [
      'wanda' => 'howCome',
    ],
    'howComeText' => [
      'wanda' => 'moneyWorld',
    ],
    'moneyWorldNone' => [
      'wanda' => 'moneyWorldEmoji',
    ],
    'moneyWorldEmojiNone' => [
      'wanda' => 'whyCare',
    ],
    'whyCareText' => [
      'wanda' => 'treasure',
    ],
    'treasureNone' => [
      'wanda' => 'mix',
    ],
    'mixNone' => [
      'wanda' => 'mixPic',
    ],
    'mixThanks1' => [
      'wanda' => 'manana',
    ],
    'mixThanks2' => [
      'wanda' => 'manana',
    ],
    'mananaNone' => [
      'wanda' => 'mananaEmoji',
    ],
    'byeNone' => [
      'wanda' => 'survey',
    ],
    
  ],
  
];

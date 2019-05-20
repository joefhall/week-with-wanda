<?php

return [

  /*
  |--------------------------------------------------------------------------------------------------
  | Wanda scenarios - Wealth - day 4 - Wanda locks you out of your own bank account
  |--------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 4,
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
    'name' => [
      'type' => 'choice',
      'user' => [
        'yes',
        'whatsUp',
      ],
    ],
    'you' => [
      'type' => 'none',
      'user' => [
        'youNone',
      ],
    ],
    'naughty' => [
      'type' => 'none',
      'user' => [
        'naughtyNone',
      ],
      'emotion' => 'thumbs-down',
    ],
    'naughtyPic' => [
      'type' => 'choice',
      'user' => [
        'haveI',
        'handsUp',
      ],
    ],
    'dumb' => [
      'type' => 'none',
      'user' => [
        'dumbNone',
      ],
    ],
    'youKnow' => [
      'type' => 'none',
      'user' => [
        'youKnowNone',
      ],
    ],
    'youKnowEmoji' => [
      'type' => 'none',
      'user' => [
        'youKnowEmojiNone',
      ],
    ],
    'richer' => [
      'type' => 'choice',
      'user' => [
        'true',
        'agree',
      ],
    ],
    'problem' => [
      'type' => 'choice',
      'user' => [
        'yup',
        'goOn',
      ],
      'emotion' => 'unhappy',
    ],
    'cantRicher' => [
      'type' => 'none',
      'user' => [
        'cantRicherNone',
      ],
    ],
    'youPoorer' => [
      'type' => 'none',
      'user' => [
        'youPoorerNone',
      ],
    ],
    'facePalmPic' => [
      'type' => 'none',
      'user' => [
        'facePalmPicNone',
      ],
    ],
    'bankRecords' => [
      'type' => 'none',
      'user' => [
        'bankRecordsNone',
      ],
    ],
    'pretty' => [
      'type' => 'choice',
      'user' => [
        'prettyNo',
        'prettyGuess',
      ],
    ],
    'youSpending' => [
      'type' => 'none',
      'user' => [
        'youSpendingNone',
      ],
    ],
    'food' => [
      'type' => 'none',
      'user' => [
        'foodNone',
      ],
    ],
    'birthday' => [
      'type' => 'none',
      'user' => [
        'birthdayNone',
      ],
    ],
    'details' => [
      'type' => 'choice',
      'user' => [
        'detailsOk',
        'detailsMust',
      ],
    ],
    'actually' => [
      'type' => 'none',
      'user' => [
        'actuallyNone',
      ],
    ],
    'no' => [
      'type' => 'none',
      'user' => [
        'noNone',
      ],
      'emotion' => 'frustrated',
    ],
    'seriously' => [
      'type' => 'none',
      'user' => [
        'seriouslyNone',
      ],
    ],
    'option' => [
      'type' => 'none',
      'user' => [
        'optionNone',
      ],
    ],
    'locked' => [
      'type' => 'none',
      'user' => [
        'lockedNone',
      ],
    ],
    'clear' => [
      'type' => 'none',
      'user' => [
        'clearNone',
      ],
    ],
    'course' => [
      'type' => 'none',
      'user' => [
        'courseNone',
      ],
    ],
    'ok' => [
      'type' => 'choice',
      'user' => [
        'okAgree',
        'okThanks',
        'okGood',
        'okDisagree',
      ],
    ],
    'really' => [
      'type' => 'none',
      'user' => [
        'reallyNone',
      ],
    ],
    'glad' => [
      'type' => 'none',
      'user' => [
        'gladNone',
      ],
      'emotion' => 'base',
    ],
    'control' => [
      'type' => 'choice',
      'user' => [
        'controlOk',
        'controlDisagree',
      ],
    ],
    'law' => [
      'type' => 'none',
      'user' => [
        'lawNone',
      ],
    ],
    'yourGood' => [
      'type' => 'none',
      'user' => [
        'yourGoodNone',
      ],
    ],
    'defense' => [
      'type' => 'textArea',
      'user' => [
        'defenseText',
      ],
    ],
    'detect' => [
      'type' => 'none',
      'user' => [
        'detectNone',
      ],
    ],
    'question' => [
      'type' => 'none',
      'user' => [
        'questionNone',
      ],
    ],
    'autonomy' => [
      'type' => 'textArea',
      'user' => [
        'autonomyText',
      ],
      'emotion' => 'angry',
    ],
    'conflicts' => [
      'type' => 'none',
      'user' => [
        'conflictsNone',
      ],
    ],
    'lost' => [
      'type' => 'textArea',
      'user' => [
        'lostText',
      ],
    ],
    'confusedEmoji' => [
      'type' => 'none',
      'user' => [
        'confusedEmojiNone',
      ],
      'emotion' => 'shocked',
    ],
    'headHurts' => [
      'type' => 'none',
      'user' => [
        'headHurtsNone',
      ],
    ],
    'sad' => [
      'type' => 'none',
      'user' => [
        'sadNone',
      ],
    ],
    'cumulative' => [
      'type' => 'none',
      'user' => [
        'cumulativeNone',
      ],
      'emotion' => 'unhappy',
    ],
    'break' => [
      'type' => 'choice',
      'user' => [
        'breakOk1',
        'breakOk2',
      ],
    ],
    'massage' => [
      'type' => 'choice',
      'user' => [
        'massageGood',
        'massageSure',
      ],
    ],
    'hard' => [
      'type' => 'none',
      'user' => [
        'hardNone',
      ],
    ],
    'tomorrow' => [
      'type' => 'choice',
      'user' => [
        'tomorrowGreat1',
        'tomorrowGreat2',
      ],
      'emotion' => 'base',
    ],
    'unlock' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'speakSoon' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
    ],
    'bye' => [
      'type' => 'share',
      'user' => [
        'byeNone',
      ],
      'emotion' => 'waving',
    ],
    'done' => [
      'type' => 'none',
      'user' => [
        'doneNone',
      ],
    ],
    'better' => [
      'type' => 'choice',
      'user' => [
        'betterAgree',
        'betterDisagree',
      ],
    ],
    'remember' => [
      'type' => 'none',
      'user' => [
        'rememberNone',
      ],
    ],
    'all' => [
      'type' => 'none',
      'user' => [
        'hardNone',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'hello1' => [
      'wanda' => 'name',
    ],
    'hello2' => [
      'wanda' => 'name',
    ],
    'yes' => [
      'wanda' => 'you',
    ],
    'whatsUp' => [
      'wanda' => 'you',
    ],
    'youNone' => [
      'wanda' => 'naughty',
    ],
    'naughtyNone' => [
      'wanda' => 'naughtyPic',
    ],
    'haveI' => [
      'wanda' => 'dumb',
    ],
    'handsUp' => [
      'wanda' => 'youKnow',
    ],
    'dumbNone' => [
      'wanda' => 'youKnow',
    ],
    'youKnowNone' => [
      'wanda' => 'youKnowEmoji',
    ],
    'youKnowEmojiNone' => [
      'wanda' => 'richer',
    ],
    'true' => [
      'wanda' => 'problem',
    ],
    'agree' => [
      'wanda' => 'problem',
    ],
    'yup' => [
      'wanda' => 'cantRicher',
    ],
    'goOn' => [
      'wanda' => 'cantRicher',
    ],
    'cantRicherNone' => [
      'wanda' => 'youPoorer',
    ],
    'youPoorerNone' => [
      'wanda' => 'facePalmPic',
    ],
    'facePalmPicNone' => [
      'wanda' => 'bankRecords',
    ],
    'bankRecordsNone' => [
      'wanda' => 'pretty',
    ],
    'prettyNo' => [
      'wanda' => 'youSpending',
    ],
    'prettyGuess' => [
      'wanda' => 'youSpending',
    ],
    'youSpendingNone' => [
      'wanda' => 'food',
    ],
    'foodNone' => [
      'wanda' => 'birthday',
    ],
    'birthdayNone' => [
      'wanda' => 'details',
    ],
    'detailsOk' => [
      'wanda' => 'actually',
    ],
    'detailsMust' => [
      'wanda' => 'actually',
    ],
    'actuallyNone' => [
      'wanda' => 'no',
    ],
    'noNone' => [
      'wanda' => 'seriously',
    ],
    'seriouslyNone' => [
      'wanda' => 'option',
    ],
    'optionNone' => [
      'wanda' => 'locked',
    ],
    'lockedNone' => [
      'wanda' => 'clear',
    ],
    'clearNone' => [
      'wanda' => 'course',
    ],
    'courseNone' => [
      'wanda' => 'ok',
    ],
    'okAgree' => [
      'wanda' => 'glad',
    ],
    'okThanks' => [
      'wanda' => 'glad',
    ],
    'okGood' => [
      'wanda' => 'glad',
    ],
    'okDisagree' => [
      'wanda' => 'really',
    ],
    'reallyNone' => [
      'wanda' => 'law',
    ],
    'gladNone' => [
      'wanda' => 'control',
    ],
    'controlOk' => [
      'wanda' => 'done',
    ],
    'controlDisagree' => [
      'wanda' => 'law',
    ],
    'lawNone' => [
      'wanda' => 'yourGood',
    ],
    'yourGoodNone' => [
      'wanda' => 'defense',
    ],
    'defenseText' => [
      'wanda' => 'detect',
    ],
    'detectNone' => [
      'wanda' => 'question',
    ],
    'questionNone' => [
      'wanda' => 'autonomy',
    ],
    'autonomyText' => [
      'wanda' => 'conflicts',
    ],
    'conflictsNone' => [
      'wanda' => 'lost',
    ],
    'lostText' => [
      'wanda' => 'confusedEmoji',
    ],
    'confusedEmojiNone' => [
      'wanda' => 'headHurts',
    ],
    'headHurtsNone' => [
      'wanda' => 'sad',
    ],
    'sadNone' => [
      'wanda' => 'cumulative',
    ],
    'cumulativeNone' => [
      'wanda' => 'break',
    ],
    'breakOk1' => [
      'wanda' => 'massage',
    ],
    'breakOk2' => [
      'wanda' => 'massage',
    ],
    'massageGood' => [
      'wanda' => 'hard',
    ],
    'massageSure' => [
      'wanda' => 'hard',
    ],
    'hardNone' => [
      'wanda' => 'tomorrow',
    ],
    'tomorrowGreat1' => [
      'wanda' => 'unlock',
    ],
    'tomorrowGreat2' => [
      'wanda' => 'unlock',
    ],
    'thanks1' => [
      'wanda' => 'speakSoon',
    ],
    'thanks2' => [
      'wanda' => 'speakSoon',
    ],
    'bye1' => [
      'wanda' => 'bye',
    ],
    'bye2' => [
      'wanda' => 'bye',
    ],
    'doneNone' => [
      'wanda' => 'better',
    ],
    'betterAgree' => [
      'wanda' => 'remember',
    ],
    'betterDisagree' => [
      'wanda' => 'detect',
    ],
    'rememberNone' => [
      'wanda' => 'all',
    ],
    'byeNone' => [
      'wanda' => '',
    ],
  ],
  
];

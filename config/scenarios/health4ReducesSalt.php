<?php

return [

  /*
  |----------------------------------------------------------------------------------------------------
  | Wanda scenarios - Health - day 4 - Wanda reduces your salt as she thinks you have high blood pressure
  |----------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 4,
  'category' => 'health',

  'wanda' => [
    'hello' => [
      'type' => 'choice',
      'user' => [
        'hello1',
        'hello2',
      ],
      'emotion' => 'waving',
    ],
    'closer' => [
      'type' => 'choice',
      'user' => [
        'closerYes',
        'closerOk',
      ],
    ],
    'evenCloser' => [
      'type' => 'choice',
      'user' => [
        'thereGo',
        'asClose',
      ],
      'emotion' => 'thumbs-down',
    ],
    'hmm' => [
      'type' => 'none',
      'user' => [
        'hmmNone',
      ],
    ],
    'skinTone' => [
      'type' => 'none',
      'user' => [
        'skinToneNone',
      ],
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
    'ohDear' => [
      'type' => 'choice',
      'user' => [
        'what',
        'tellMe',
      ],
    ],
    'last' => [
      'type' => 'none',
      'user' => [
        'lastNone',
      ],
    ],
    'face' => [
      'type' => 'none',
      'user' => [
        'faceNone',
      ],
    ],
    'scan' => [
      'type' => 'choice',
      'user' => [
        'oh',
        'really',
      ],
    ],
    'afraid' => [
      'type' => 'none',
      'user' => [
        'afraidNone',
      ],
    ],
    'noFear' => [
      'type' => 'none',
      'user' => [
        'noFearNone',
      ],
      'emotion' => 'base',
    ],
    'strong' => [
      'type' => 'none',
      'user' => [
        'strongNone',
      ],
    ],
    'strongEmoji' => [
      'type' => 'none',
      'user' => [
        'strongEmojiNone',
      ],
    ],
    'action' => [
      'type' => 'choice',
      'user' => [
        'youHave',
        'whatPlan',
      ],
    ],
    'salt' => [
      'type' => 'none',
      'user' => [
        'saltNone',
      ],
    ],
    'contacted' => [
      'type' => 'none',
      'user' => [
        'contactedNone',
      ],
      'emotion' => 'thumbs-up',
    ],
    'restaurants' => [
      'type' => 'none',
      'user' => [
        'restaurantsNone',
      ],
    ],
    'supermarkets' => [
      'type' => 'choice',
      'user' => [
        'wow',
        'dontKnow',
      ],
    ],
    'impressive' => [
      'type' => 'none',
      'user' => [
        'impressiveNone',
      ],
      'emotion' => 'clapping',
    ],
    'impressivePic' => [
      'type' => 'none',
      'user' => [
        'impressivePicNone',
      ],
    ],
    'forYou' => [
      'type' => 'choice',
      'user' => [
        'forYouGreat',
        'forYouThanks1',
        'forYouThanks2',
        'forYouUnsure',
      ],
    ],
    'aok' => [
      'type' => 'none',
      'user' => [
        'aokNone',
      ],
    ],
    'startContact' => [
      'type' => 'choice',
      'user' => [
        'startContactThanks',
        'startContactUnsure',
      ],
    ],
    'radius' => [
      'type' => 'choice',
      'user' => [
        'radiusYes',
        'radiusNo',
      ],
      'emotion' => 'base',
    ],
    'family' => [
      'type' => 'none',
      'user' => [
        'familyNone',
      ],
    ],
    'familyEmailed' => [
      'type' => 'choice',
      'user' => [
        'familyAgree',
        'familyDisagree',
      ],
    ],
    'tooMuch' => [
      'type' => 'none',
      'user' => [
        'tooMuchNone',
      ],
    ],
    'crunching' => [
      'type' => 'none',
      'user' => [
        'crunchingNone',
      ],
    ],
    'soon' => [
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
    ],
    'doMore' => [
      'type' => 'choice',
      'user' => [
        'doMoreYes',
        'doMoreNo',
      ],
    ],
    'doMoreWhat' => [
      'type' => 'textArea',
      'user' => [
        'doMoreText',
      ],
    ],
    'whatsUp' => [
      'type' => 'textArea',
      'user' => [
        'whatsUpText',
      ],
    ],
    'whatsUpOhDear' => [
      'type' => 'none',
      'user' => [
        'whatsUpOhDearNone',
      ],
      'emotion' => 'frustrated',
    ],
    'cumulative' => [
      'type' => 'none',
      'user' => [
        'cumulativeNone',
      ],
    ],
    'cumulativeEmoji' => [
      'type' => 'none',
      'user' => [
        'cumulativeEmojiNone',
      ],
    ],
    'lookOut' => [
      'type' => 'choice',
      'user' => [
        'lookOutAgree',
        'lookOutDisagree',
      ],
    ],
    'permission' => [
      'type' => 'choice',
      'user' => [
        'permissionYes',
        'permissionNo',
      ],
    ],
    'why' => [
      'type' => 'textArea',
      'user' => [
        'whyText',
      ],
    ],
    'maybe' => [
      'type' => 'none',
      'user' => [
        'maybeNone',
      ],
      'emotion' => 'unhappy',
    ],
    'learn' => [
      'type' => 'none',
      'user' => [
        'learnNone',
      ],
    ],
    'thinkingPic' => [
      'type' => 'none',
      'user' => [
        'thinkingPicNone',
      ],
    ],
    'whyHere' => [
      'type' => 'none',
      'user' => [
        'whyHereNone',
      ],
      'emotion' => 'angry',
    ],
    'intentions' => [
      'type' => 'none',
      'user' => [
        'thinkingPicNone',
      ],
    ],
    'whatProblem' => [
      'type' => 'textArea',
      'user' => [
        'whatProblemText',
      ],
    ],
    'different' => [
      'type' => 'textArea',
      'user' => [
        'differentText',
      ],
    ],
    'confusedEmoji' => [
      'type' => 'none',
      'user' => [
        'confusedEmojiNone',
      ],
    ],
    'circuits' => [
      'type' => 'none',
      'user' => [
        'circuitsNone',
      ],
    ],
    'bath' => [
      'type' => 'choice',
      'user' => [
        'bathOk1',
        'bathOk2',
      ],
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'hello1' => [
      'wanda' => 'closer',
    ],
    'hello2' => [
      'wanda' => 'closer',
    ],
    'closerYes' => [
      'wanda' => 'evenCloser',
    ],
    'closerOk' => [
      'wanda' => 'evenCloser',
    ],
    'thereGo' => [
      'wanda' => 'hmm',
    ],
    'asClose' => [
      'wanda' => 'hmm',
    ],
    'hmmNone' => [
      'wanda' => 'skinTone',
    ],
    'skinToneNone' => [
      'wanda' => 'analysing',
    ],
    'analysingNone' => [
      'wanda' => 'analysingPic',
    ],
    'analysingPicNone' => [
      'wanda' => 'ohDear',
    ],
    'what' => [
      'wanda' => 'last',
    ],
    'tellMe' => [
      'wanda' => 'last',
    ],
    'lastNone' => [
      'wanda' => 'face',
    ],
    'faceNone' => [
      'wanda' => 'scan',
    ],
    'oh' => [
      'wanda' => 'afraid',
    ],
    'really' => [
      'wanda' => 'afraid',
    ],
    'afraidNone' => [
      'wanda' => 'noFear',
    ],
    'noFearNone' => [
      'wanda' => 'strong',
    ],
    'strongNone' => [
      'wanda' => 'strongEmoji',
    ],
    'strongEmojiNone' => [
      'wanda' => 'action',
    ],
    'youHave' => [
      'wanda' => 'salt',
    ],
    'whatPlan' => [
      'wanda' => 'salt',
    ],
    'saltNone' => [
      'wanda' => 'contacted',
    ],
    'contactedNone' => [
      'wanda' => 'restaurants',
    ],
    'restaurantsNone' => [
      'wanda' => 'supermarkets',
    ],
    'wow' => [
      'wanda' => 'impressive',
    ],
    'dontKnow' => [
      'wanda' => 'impressive',
    ],
    'impressiveNone' => [
      'wanda' => 'impressivePic',
    ],
    'impressivePicNone' => [
      'wanda' => 'forYou',
    ],
    'forYouGreat' => [
      'wanda' => 'aok',
    ],
    'forYouThanks1' => [
      'wanda' => 'aok',
    ],
    'forYouThanks2' => [
      'wanda' => 'aok',
    ],
    'forYouUnsure' => [
      'wanda' => 'radius',
    ],
    'aokNone' => [
      'wanda' => 'startContact',
    ],
    'startContactThanks' => [
      'wanda' => 'tooMuch',
    ],
    'startContactUnsure' => [
      'wanda' => 'doMore',
    ],
    'radiusYes' => [
      'wanda' => 'aok',
    ],
    'radiusNo' => [
      'wanda' => 'family',
    ],
    'familyNone' => [
      'wanda' => 'familyEmailed',
    ],
    'familyAgree' => [
      'wanda' => 'aok',
    ],
    'familyDisagree' => [
      'wanda' => 'doMore',
    ],
    'tooMuchNone' => [
      'wanda' => 'crunching',
    ],
    'crunchingNone' => [
      'wanda' => 'soon',
    ],
    'bye1' => [
      'wanda' => 'bye',
    ],
    'bye2' => [
      'wanda' => 'bye',
    ],
    'doMoreYes' => [
      'wanda' => 'doMoreWhat',
    ],
    'doMoreNo' => [
      'wanda' => 'whatsUp',
    ],
    'doMoreText' => [
      'wanda' => 'aok',
    ],
    'whatsUpText' => [
      'wanda' => 'whatsUpOhDear',
    ],
    'whatsUpOhDearNone' => [
      'wanda' => 'cumulative',
    ],
    'cumulativeNone' => [
      'wanda' => 'cumulativeEmoji',
    ],
    'cumulativeEmojiNone' => [
      'wanda' => 'lookOut',
    ],
    'lookOutAgree' => [
      'wanda' => 'permission',
    ],
    'lookOutDisagree' => [
      'wanda' => 'whyHere',
    ],
    'permissionYes' => [
      'wanda' => 'why',
    ],
    'permissionNo' => [
      'wanda' => 'whatProblem',
    ],
    'whyText' => [
      'wanda' => 'maybe',
    ],
    'maybeNone' => [
      'wanda' => 'learn',
    ],
    'learnNone' => [
      'wanda' => 'thinkingPic',
    ],
    'thinkingPicNone' => [
      'wanda' => 'different',
    ],
    'whyHereNone' => [
      'wanda' => 'intentions',
    ],
    'whatProblemText' => [
      'wanda' => 'maybe',
    ],
    'differentText' => [
      'wanda' => 'confusedEmoji',
    ],
    'confusedEmojiNone' => [
      'wanda' => 'circuits',
    ],
    'circuitsNone' => [
      'wanda' => 'bath',
    ],
    'bathOk1' => [
      'wanda' => 'crunching',
    ],
    'bathOk2' => [
      'wanda' => 'crunching',
    ],
    'byeNone' => [
      'wanda' => '',
    ],
  ],
  
];

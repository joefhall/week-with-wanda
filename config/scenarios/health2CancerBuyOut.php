<?php

return [

  /*
  |-------------------------------------------------------------------------------
  | Wanda scenarios - Health - day 2 - Wanda buying up cancer research companies
  |-------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 2,
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
    'perky' => [
      'type' => 'choice',
      'user' => [
        'perkyThanks',
        'lookingWell',
      ],
    ],
    'worrying' => [
      'type' => 'choice',
      'user' => [
        'ohNo',
        'whatMean',
      ],
      'emotion' => 'unhappy',
    ],
    'notYounger' => [
      'type' => 'choice',
      'user' => [
        'takeEasy',
        'gotPoint',
      ],
    ],
    'cancerRisk' => [
      'type' => 'choice',
      'user' => [
        'uhOh',
        'gulp',
        'trueStory',
      ],
    ],
    'answer' => [
      'type' => 'choice',
      'user' => [
        'ohReally',
        'whatIsIt',
      ],
      'emotion' => 'elated',
    ],
    'crunching' => [
      'type' => 'none',
      'user' => [
        'crunchingNone',
      ],
    ],
    'crunchingPic' => [
      'type' => 'none',
      'user' => [
        'crunchingPicNone',
      ],
    ],
    'survivalRate' => [
      'type' => 'choice',
      'user' => [
        'goOn',
        'tellMe',
      ],
    ],
    'buyUp' => [
      'type' => 'none',
      'user' => [
        'buyUpNone',
      ],
    ],
    'snag' => [
      'type' => 'choice',
      'user' => [
        'snagWhat1',
        'snagWhat2',
      ],
    ],
    'peskyGov' => [
      'type' => 'none',
      'user' => [
        'peskyGovNone',
      ],
      'emotion' => 'thumbs-down',
    ],
    'signPetition' => [
      'type' => 'choice',
      'user' => [
        'signPetitionPositive',
        'signPetitionUnsure',
        'signPetitionNegative',
      ],
    ],
    'heresPetition' => [
      'type' => 'none',
      'user' => [
        'heresPetitionNone',
      ],
      'emotion' => 'thumbs-down',
    ],
    'heresPetitionPic' => [
      'type' => 'choice',
      'user' => [
        'signPetitionSign',
        'signPetitionUnsure',
      ],
    ],
    'whaaat' => [
      'type' => 'choice',
      'user' => [
        'yeahBut',
        'thingIs',
      ],
      'emotion' => 'frustrated',
    ],
    'whatProblem' => [
      'type' => 'choice',
      'user' => [
        'notBetter',
        'tooMuchDataPower',
        'somethingElse',
      ],
    ],
    'whereTrust' => [
      'type' => 'none',
      'user' => [
        'whereTrustNone',
      ],
    ],
    'silly' => [
      'type' => 'none',
      'user' => [
        'sillyNone',
      ],
    ],
    'whereTrustPic' => [
      'type' => 'none',
      'user' => [
        'whereTrustPicNone',
      ],
    ],
    'whyNot' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'bigTech' => [
      'type' => 'choice',
      'user' => [
        'notHowWant',
        'differentDream',
      ],
    ],
    'bigDeal' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'tellMe' => [
      'type' => 'textArea',
      'user' => [
        'problemText',
      ],
    ],
    'neverThought' => [
      'type' => 'none',
      'user' => [
        'neverThoughtNone',
      ],
    ],
    'thinkingFace' => [
      'type' => 'none',
      'user' => [
        'thinkingFaceNone',
      ],
    ],
    'overTheTop' => [
      'type' => 'textArea',
      'user' => [
        'overTheTopText',
      ],
      'emotion' => 'angry',
    ],
    'pointOfView' => [
      'type' => 'none',
      'user' => [
        'pointOfViewNone',
      ],
    ],
    'brainHurting' => [
      'type' => 'none',
      'user' => [
        'brainHurtingNone',
      ],
    ],
    'brainHurtingPic' => [
      'type' => 'none',
      'user' => [
        'brainHurtingPicNone',
      ],
    ],
    'takeBreak' => [
      'type' => 'choice',
      'user' => [
        'endOk1',
        'endOk2',
      ],
    ],
    'govWin' => [
      'type' => 'choice',
      'user' => [
        'govWinGreat',
        'govWinHurray',
      ],
    ],
    'startResearch' => [
      'type' => 'none',
      'user' => [
        'startResearchNone',
      ],
    ],
    'startResearchPic' => [
      'type' => 'none',
      'user' => [
        'startResearchPicNone',
      ],
    ],
    'betterTomorrow' => [
      'type' => 'choice',
      'user' => [
        'endOk1',
        'endOk2',
      ],
    ],
    'thanksDoll' => [
      'type' => 'choice',
      'user' => [
        'endNoProbs',
        'endAlright',
      ],
      'emotion' => 'base',
    ],
    'haveFabDay' => [
      'type' => 'choice',
      'user' => [
        'endEmoji1',
        'endEmoji2',
      ],
    ],
    'bye' => [
      'type' => 'choice',
      'user' => [
        'bye1',
        'bye2',
      ],
      'emotion' => 'waving',
    ],
  ],

  'user' => [
    'begin' => [
      'wanda' => 'hello',
    ],
    'hello1' => [
      'wanda' => 'perky',
    ],
    'hello2' => [
      'wanda' => 'perky',
    ],
    'perkyThanks' => [
      'wanda' => 'worrying',
    ],
    'lookingWell' => [
      'wanda' => 'worrying',
    ],
    'ohNo' => [
      'wanda' => 'notYounger',
    ],
    'whatMean' => [
      'wanda' => 'notYounger',
    ],
    'takeEasy' => [
      'wanda' => 'cancerRisk',
    ],
    'gotPoint' => [
      'wanda' => 'cancerRisk',
    ],
    'uhOh' => [
      'wanda' => 'answer',
    ],
    'gulp' => [
      'wanda' => 'answer',
    ],
    'trueStory' => [
      'wanda' => 'answer',
    ],
    'ohReally' => [
      'wanda' => 'crunching',
    ],
    'whatIsIt' => [
      'wanda' => 'crunching',
    ],
    'crunchingNone' => [
      'wanda' => 'crunchingPic',
    ],
    'crunchingPicNone' => [
      'wanda' => 'survivalRate',
    ],
    'goOn' => [
      'wanda' => 'buyUp',
    ],
    'tellMe' => [
      'wanda' => 'buyUp',
    ],
    'buyUpNone' => [
      'wanda' => 'snag',
    ],
    'snagWhat1' => [
      'wanda' => 'peskyGov',
    ],
    'snagWhat2' => [
      'wanda' => 'peskyGov',
    ],
    'peskyGovNone' => [
      'wanda' => 'signPetition',
    ],
    'signPetitionPositive' => [
      'wanda' => 'heresPetition',
    ],
    'signPetitionUnsure' => [
      'wanda' => 'whaaat',
    ],
    'signPetitionNegative' => [
      'wanda' => 'whaaat',
    ],
    'heresPetitionNone' => [
      'wanda' => 'heresPetitionPic',
    ],
    'signPetitionSign' => [
      'wanda' => 'govWin',
    ],
    'yeahBut' => [
      'wanda' => 'whatProblem',
    ],
    'thingIs' => [
      'wanda' => 'whatProblem',
    ],
    'notBetter' => [
      'wanda' => 'whereTrust',
    ],
    'tooMuchDataPower' => [
      'wanda' => 'silly',
    ],
    'somethingElse' => [
      'wanda' => 'tellMe',
    ],
    'whereTrustNone' => [
      'wanda' => 'whereTrustPic',
    ],
    'sillyNone' => [
      'wanda' => 'bigTech',
    ],
    'whereTrustPicNone' => [
      'wanda' => 'whyNot',
    ],
    'notHowWant' => [
      'wanda' => 'bigDeal',
    ],
    'differentDream' => [
      'wanda' => 'bigDeal',
    ],
    'problemText' => [
      'wanda' => 'neverThought',
    ],
    'neverThoughtNone' => [
      'wanda' => 'thinkingFace',
    ],
    'thinkingFaceNone' => [
      'wanda' => 'overTheTop',
    ],
    'overTheTopText' => [
      'wanda' => 'pointOfView',
    ],
    'pointOfViewNone' => [
      'wanda' => 'brainHurting',
    ],
    'brainHurtingNone' => [
      'wanda' => 'brainHurtingPic',
    ],
    'brainHurtingPicNone' => [
      'wanda' => 'takeBreak',
    ],
    'endOk1' => [
      'wanda' => 'thanksDoll',
    ],
    'endOk2' => [
      'wanda' => 'thanksDoll',
    ],
    'govWinGreat' => [
      'wanda' => 'startResearch',
    ],
    'govWinHurray' => [
      'wanda' => 'startResearch',
    ],
    'startResearchNone' => [
      'wanda' => 'startResearchPic',
    ],
    'startResearchPicNone' => [
      'wanda' => 'betterTomorrow',
    ],
    'endNoProbs' => [
      'wanda' => 'haveFabDay',
    ],
    'endAlright' => [
      'wanda' => 'haveFabDay',
    ], 
    'endEmoji1' => [
      'wanda' => 'bye',
    ],
    'endEmoji2' => [
      'wanda' => 'bye',
    ],
    
  ],
  
];

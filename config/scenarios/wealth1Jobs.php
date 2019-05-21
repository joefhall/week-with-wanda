<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Wealth - day 1 - Wanda doing a job for you
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 1,
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
    'intro' => [
      'type' => 'none',
      'user' => [
        'introNone',
      ],
    ],
    'takeCare' => [
      'type' => 'choice',
      'user' => [
        'thatsNice',
        'whatThinking',
      ],
      'emotion' => 'heart',
    ],
    'wantToWork' => [
      'type' => 'none',
      'user' => [
        'wantToWorkNone',
      ],
    ],
    'superComputer' => [
      'type' => 'none',
      'user' => [
        'superComputerNone',
      ],
    ],
    'superComputerPic' => [
      'type' => 'none',
      'user' => [
        'superComputerPicNone',
      ],
    ],
    'doneTraining' => [
      'type' => 'none',
      'user' => [
        'doneTrainingNone',
      ],
      'emotion' => 'base',
    ],
    'scholar' => [
      'type' => 'none',
      'user' => [
        'scholarNone',
      ],
    ],
    'whatCouldDo' => [
      'type' => 'choice',
      'user' => [
        'oohWhat',
        'tellMe',
      ],
    ],
    'jobsCouldDo' => [
      'type' => 'choice',
      'user' => [
        'rocketScientist',
        'artist',
        'nurse',
        'banker',
        'noneJobs',
      ],
      'emotion' => 'thumbs-up',
    ],
    'rocketScientistGreat' => [
      'type' => 'choice',
      'user' => [
        'allGood',
        'fewWorriesRocketScientist',
      ],
      'emotion' => 'elated',
    ],
    'artistGreat' => [
      'type' => 'choice',
      'user' => [
        'youWill',
        'fewWorriesArtist',
      ],
      'emotion' => 'elated',
    ],
    'nurseGreat' => [
      'type' => 'choice',
      'user' => [
        'aiToughJobs',
        'aiUsefulSociety',
        'fewWorriesNurse',
      ],
      'emotion' => 'elated',
    ],
    'bankerGreat' => [
      'type' => 'choice',
      'user' => [
        'aiMostMoney',
        'aiSoullessJobs',
        'fewWorriesBanker',
      ],
      'emotion' => 'elated',
    ],
    'notGood' => [
      'type' => 'choiceAndText',
      'user' => [
        'aiLimits',
        'aiNoJobs',
        'aiProblemText',
      ],
      'emotion' => 'unhappy',
    ],
    'anotherJob' => [
      'type' => 'textAndChoice',
      'user' => [
        'anotherJobText',
        'anotherJobDisagree',
      ],
    ],
    'asManyJobs' => [
      'type' => 'choice',
      'user' => [
        'asManyJobsAgree',
        'aiLimits',
        'asManyJobsDisagree',
      ],
    ],
    'aiLimitsWhat' => [
      'type' => 'choice',
      'user' => [
        'aiLimitsSpecific',
        'aiLimitsWealth',
        'aiLimitsKeepJobs',
      ],
      'emotion' => 'unhappy',
    ],
    'startApplying' => [
      'type' => 'none',
      'user' => [
        'startApplyingNone',
      ],
      'emotion' => 'clapping',
    ],
    'startApplyingEmoji' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'specificJobsWhat' => [
      'type' => 'textArea',
      'user' => [
        'specificJobsWhatText',
      ],
    ],
    'specificJobsUnderstand' => [
      'type' => 'textArea',
      'user' => [
        'specificJobsUnderstandText',
      ],
      'emotion' => 'shocked',
    ],
    'narrowminded' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
      'emotion' => 'unhappy',
    ],
    'getDown' => [
      'type' => 'none',
      'user' => [
        'getDownNone',
      ],
    ],
    'makingYouRicher' => [
      'type' => 'none',
      'user' => [
        'makingYouRicherNone',
      ],
    ],
    'makingYouRicherEmoji' => [
      'type' => 'none',
      'user' => [
        'makingYouRicherEmojiNone',
      ],
    ],
    'haveAThink' => [
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
      'wanda' => 'intro',
    ],
    'getStarted2' => [
      'wanda' => 'intro',
    ],
    'introNone' => [
      'wanda' => 'takeCare',
    ],
    'thatsNice' => [
      'wanda' => 'wantToWork',
    ],
    'whatThinking' => [
      'wanda' => 'wantToWork',
    ],
    'wantToWorkNone' => [
      'wanda' => 'superComputer',
    ],
    'superComputerNone' => [
      'wanda' => 'superComputerPic',
    ],
    'superComputerPicNone' => [
      'wanda' => 'doneTraining',
    ],
    'doneTrainingNone' => [
      'wanda' => 'scholar',
    ],
    'scholarNone' => [
      'wanda' => 'whatCouldDo',
    ],
    'oohWhat' => [
      'wanda' => 'jobsCouldDo',
    ],
    'tellMe' => [
      'wanda' => 'jobsCouldDo',
    ],
    'rocketScientist' => [
      'wanda' => 'rocketScientistGreat',
    ],
    'artist' => [
      'wanda' => 'artistGreat',
    ],
    'nurse' => [
      'wanda' => 'nurseGreat',
    ],
    'banker' => [
      'wanda' => 'bankerGreat',
    ],
    'noneJobs' => [
      'wanda' => 'anotherJob',
    ],
    'allGood' => [
      'wanda' => 'asManyJobs',
    ],
    'fewWorriesRocketScientist' => [
      'wanda' => 'notGood',
    ],
    'youWill' => [
      'wanda' => 'asManyJobs',
    ],
    'fewWorriesArtist' => [
      'wanda' => 'notGood',
    ],
    'aiToughJobs' => [
      'wanda' => 'asManyJobs',
    ],
    'aiUsefulSociety' => [
      'wanda' => 'asManyJobs',
    ],
    'fewWorriesNurse' => [
      'wanda' => 'notGood',
    ],
    'aiMostMoney' => [
      'wanda' => 'asManyJobs',
    ],
    'aiSoullessJobs' => [
      'wanda' => 'asManyJobs',
    ],
    'fewWorriesBanker' => [
      'wanda' => 'notGood',
    ],
    'asManyJobsAgree' => [
      'wanda' => 'startApplying',
    ],
    'aiLimits' => [
      'wanda' => 'aiLimitsWhat',
    ],
    'asManyJobsDisagree' => [
      'wanda' => 'notGood',
    ],
    'startApplyingNone' => [
      'wanda' => 'startApplyingEmoji',
    ],
    'aiLimitsSpecific' => [
      'wanda' => 'specificJobsWhat',
    ],
    'aiLimitsWealth' => [
      'wanda' => 'getDown',
    ],
    'aiLimitsKeepJobs' => [
      'wanda' => 'specificJobsUnderstand',
    ],
    'aiNoJobs' => [
      'wanda' => 'specificJobsUnderstand',
    ],
    'aiProblemText' => [
      'wanda' => 'specificJobsUnderstand',
    ],
    'specificJobsWhatText' => [
      'wanda' => 'specificJobsUnderstand',
    ],
    'specificJobsUnderstandText' => [
      'wanda' => 'narrowminded',
    ],
    'anotherJobText' => [
      'wanda' => 'asManyJobs',
    ],
    'anotherJobDisagree' => [
      'wanda' => 'notGood',
    ],
    'getDownNone' => [
      'wanda' => 'makingYouRicher',
    ],
    'makingYouRicherNone' => [
      'wanda' => 'makingYouRicherEmoji',
    ],
    'makingYouRicherEmojiNone' => [
      'wanda' => 'haveAThink',
    ],
    'thanks1' => [
      'wanda' => 'bye',
    ],
    'thanks2' => [
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

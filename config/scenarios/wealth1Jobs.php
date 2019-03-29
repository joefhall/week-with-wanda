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
    ],
    'wantToWork' => [
      'type' => 'none',
      'user' => [
        'wantToWorkNone',
      ],
    ],
    'doneTraining' => [
      'type' => 'none',
      'user' => [
        'doneTrainingNone',
      ],
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
    ],
    'rocketScientistGreat' => [
      'type' => 'choice',
      'user' => [
        'allGood',
        'fewWorriesRocketScientist',
      ],
    ],
    'artistGreat' => [
      'type' => 'choice',
      'user' => [
        'youWill',
        'fewWorriesArtist',
      ],
    ],
    'nurseGreat' => [
      'type' => 'choice',
      'user' => [
        'aiToughJobs',
        'aiUsefulSociety',
        'fewWorriesNurse',
      ],
    ],
    'bankerGreat' => [
      'type' => 'choice',
      'user' => [
        'aiMostMoney',
        'aiSoullessJobs',
        'fewWorriesBanker',
      ],
    ],
    'notGood' => [
      'type' => 'choiceAndText',
      'user' => [
        'aiLimits',
        'aiNoJobs',
        'aiProblemText',
      ],
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
    ],
    'startApplying' => [
      'type' => 'none',
      'user' => [
        'startApplyingNone',
      ],
    ],
    'startApplyingEmoji' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'specificJobsWhat' => [
      'type' => 'text',
      'user' => [
        'specificJobsWhatText',
      ],
    ],
    'specificJobsUnderstand' => [
      'type' => 'text',
      'user' => [
        'specificJobsUnderstandText',
      ],
    ],
    'narrowminded' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
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
  ],
  
];

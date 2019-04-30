<?php

return [

  /*
  |--------------------------------------------------------------------------------
  | List of user chat interactions that record the user's views on AI issues
  |--------------------------------------------------------------------------------
  | 
  | These are used to summarise the user's views on the final day of the experience
  | and for Wanda's Wall if they want
  |
  */

  'dehumanisation' => [
    'day' => 1,
    'description' => 'Taking over human interactions?',
    'scenarios' => [
      'health1BotCare' => [
        'humanCare',
        'humanCareContact',
        'humanCarePhysical',
        'humanCareText',
        'techLimitations',
        'wandaCareProblemText',
      ],
      'wealth1Jobs' => [
        'aiToughJobs',
        'aiUsefulSociety',
        'aiMostMoney',
        'aiLimits',
        'aiLimitsSpecific',
        'aiLimitsWealth',
        'aiLimitsKeepJobs',
        'aiNoJobs',
        'aiProblemText',
        'specificJobsWhatText',
        'specificJobsUnderstandText',
      ],
      'relationships1CallingFriends' => [
        'nextStepText',
        'codePretending',
        'botsLimits',
        'loveTalking',
        'whyHungUpText',
        'otherWaysText',
      ],
    ],
  ],
  
  'centralisation' => [
    'day' => 2,
    'description' => 'Technology in the hands of a few?',
    'scenarios' => [
      'health2CancerBuyOut' => [
        'notBetter',
        'tooMuchDataPower',
        'problemText',
        'overTheTopText',
      ],
      'wealth2FacebookBuyOut' => [
        'tooMuchPower',
        'spreadTech',
        'problemText',
        'overlookText',
      ],
      'relationships2MegaMessagingApp' => [
        'tooMuchPower',
        'statusQuo',
        'problemText',
        'enoughReasonText',
        'otherText',
      ],
    ],
  ],
  
  'privacy' => [
    'day' => 3,
    'description' => 'Privacy?',
    'scenarios' => [
      'health3DepressedListening' => [
        'touchyText',
        'whyCareText',
        'tradeText',
        'societyText',
      ],
      'relationships3NewBestFriend' => [
        'problemText',
        'privacyText',
      ],
      'wealth3SellLocationData' => [
        'howComeText',
        'whyCareText',
      ],
    ],
  ],
  
  'autonomy' => [
    'day' => 4,
    'description' => 'How much autonomy should AI bots have?',
    'scenarios' => [
      'health4ReducesSalt' => [
        'doMoreText',
        'whatsUpText',
        'whyText',
        'whatProblemText',
        'differentText',
      ],
      'relationships4DeletesContacts' => [
        'problemText',
        'whyLimitsText',
        'howMuchControlText',
      ],
      'wealth4BankAccount' => [
        'defenseText',
        'autonomyText',
        'lostText',
      ],
    ],
  ],
  
  'bias' => [
    'day' => 5,
    'description' => 'Do bias and discrimination matter?',
    'scenarios' => [
      'health5Exclude' => [
        'helpText',
        'whyText',
        'skinWhatText',
      ],
      'relationships5Failures' => [
        'problemText',
        'algorithmText',
        'betterText',
      ],
      'wealth5Insurance' => [
        'whatMindText',
        'whyCareText',
      ],
    ],
  ],
  
  'malicious' => [
    'day' => 6,
    'description' => 'Should AI be used maliciously?',
    'scenarios' => [
      'health6Terrorism' => [
        'issueText',
        'whatProblemText',
        'swingText',
        'matterText',
        'forgetText',
      ],
      'relationships6Criminals' => [
        'worriedText',
        'problemText',
      ],
      'wealth6SexTape' => [
        'wrongText',
        'anyText',
      ],
    ],
  ],
  
];

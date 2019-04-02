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
  | Grouped below by issue > scenario > user interaction
  |
  */

  'dehumanisation' => [
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
  ],
  
];

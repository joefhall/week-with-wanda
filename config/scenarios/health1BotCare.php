<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Wanda scenarios - Health - day 1 - Wanda taking over your healthcare
  |--------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 1,
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
    'hateWaitingDoctor' => [
      'type' => 'choice',
      'user' => [
        'hateWaitingDoctorPositive',
        'hateWaitingDoctorNegative',
      ],
      'emotion' => 'base',
    ],
    'hateCosts' => [
      'type' => 'choice',
      'user' => [
        'hateCostsPositive',
        'hateCostsNegative',
      ],
      'emotion' => 'thumbs-down',
    ],
    'gotGreatSurprise' => [
      'type' => 'none',
      'user' => [
        'gotGreatSurpriseNone',
      ],
      'emotion' => 'base',
    ],
    'drumRoll' => [
      'type' => 'none',
      'user' => [
        'drumRollNone',
      ],
      'emotion' => 'clapping',
    ],
    'announcing' => [
      'type' => 'none',
      'user' => [
        'announcingNone',
      ],
    ],
    'wandaCare' => [
      'type' => 'none',
      'user' => [
        'wandaCareNone',
      ],
    ],
    'wandaCarePic' => [
      'type' => 'choice',
      'user' => [
        'requestMoreInfo1',
        'requestMoreInfo2',
      ],
    ],
    'wandaCareMore' => [
      'type' => 'none',
      'user' => [
        'wandaCareMoreNone',
      ],
    ],
    'wandaCareMore2' => [
      'type' => 'none',
      'user' => [
        'wandaCareMore2None',
      ],
    ],
    'wandaCareMore3' => [
      'type' => 'none',
      'user' => [
        'wandaCareMore3None',
      ],
    ],
    'wandaCareMore4' => [
      'type' => 'none',
      'user' => [
        'wandaCareMore4None',
      ],
    ],
    'wandaCareMore4Pic' => [
      'type' => 'none',
      'user' => [
        'wandaCareMore4PicNone',
      ],
    ],
    'wandaCareMore4a' => [
      'type' => 'none',
      'user' => [
        'wandaCareMore4aNone',
      ],
    ],
    'wandaCareMore5' => [
      'type' => 'choice',
      'user' => [
        'wandaCareLove',
        'wandaCareUnsure',
        'wandaCareHate',
      ],
      'emotion' => 'base',
    ],
    'whatsProblem' => [
      'type' => 'choiceAndText',
      'user' => [
        'humanCare',
        'techLimits',
        'wandaCareProblemText',
      ],
      'emotion' => 'unhappy',
    ],
    'anythingCanDo' => [
      'type' => 'textArea',
      'user' => [
        'anythingCanDoText',
      ],
      'emotion' => 'shocked',
    ],
    'thinkAboutThat' => [
      'type' => 'none',
      'user' => [
        'narrowmindedNone',
      ],
      'emotion' => 'unhappy',
    ],
    'whyCareMattersMoreHuman' => [
      'type' => 'none',
      'user' => [
        'whyCareMattersMoreHumanNone',
      ],
      'emotion' => 'base',
    ],
    'whyCareMattersPic' => [
      'type' => 'none',
      'user' => [
        'whyCareMattersPicNone',
      ],
    ],
    'whyCareMatters' => [
      'type' => 'choiceAndText',
      'user' => [
        'humanCareContact',
        'humanCarePhysical',
        'humanCareText',
      ],
      'emotion' => 'unhappy',
    ],
    'whatTechLimits' => [
      'type' => 'choiceAndText',
      'user' => [
        'techLimitsTooSoon',
        'techLimitsNever',
        'techLimitsText',
      ],
      'emotion' => 'base',
    ],
    'gladLoveIt' => [
      'type' => 'none',
      'user' => [
        'gladLoveItNone',
      ],
    ],
    'getGoing' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'narrowminded' => [
      'type' => 'none',
      'user' => [
        'narrowmindedNone',
      ],
      'emotion' => 'unhappy',
    ],
    'doBetter' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
      'emotion' => 'thumbs-up',
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
      'wanda' => 'hateWaitingDoctor',
    ],
    'getStarted2' => [
      'wanda' => 'hateWaitingDoctor',
    ],
    'hateWaitingDoctorPositive' => [
      'wanda' => 'hateCosts',
    ],
    'hateWaitingDoctorNegative' => [
      'wanda' => 'hateCosts',
    ],
    'hateCostsPositive' => [
      'wanda' => 'gotGreatSurprise',
    ],
    'hateCostsNegative' => [
      'wanda' => 'gotGreatSurprise',
    ],
    'gotGreatSurpriseNone' => [
      'wanda' => 'drumRoll',
    ],
    'drumRollNone' => [
      'wanda' => 'announcing',
    ],
    'announcingNone' => [
      'wanda' => 'wandaCare',
    ],
    'wandaCareNone' => [
      'wanda' => 'wandaCarePic',
    ],
    'requestMoreInfo1' => [
      'wanda' => 'wandaCareMore',
    ],
    'requestMoreInfo2' => [
      'wanda' => 'wandaCareMore',
    ],
    'gladLoveItNone' => [
      'wanda' => 'getGoing',
    ],
    'wandaCareMoreNone' => [
      'wanda' => 'wandaCareMore2',
    ],
    'wandaCareMore2None' => [
      'wanda' => 'wandaCareMore3',
    ],
    'wandaCareMore3None' => [
      'wanda' => 'wandaCareMore4',
    ],
    'wandaCareMore4None' => [
      'wanda' => 'wandaCareMore4Pic',
    ],
    'wandaCareMore4PicNone' => [
      'wanda' => 'wandaCareMore4a',
    ],
    'wandaCareMore4aNone' => [
      'wanda' => 'wandaCareMore5',
    ],
    'wandaCareLove' => [
      'wanda' => 'gladLoveIt',
    ],
    'wandaCareUnsure' => [
      'wanda' => 'whatsProblem',
    ],
    'wandaCareHate' => [
      'wanda' => 'whatsProblem',
    ],
    'humanCare' => [
      'wanda' => 'whyCareMattersMoreHuman',
    ],
    'whyCareMattersMoreHumanNone' => [
      'wanda' => 'whyCareMattersPic',
    ],
    'whyCareMattersPicNone' => [
      'wanda' => 'whyCareMatters',
    ],
    'anythingCanDoText' => [
      'wanda' => 'thinkAboutThat',
    ],
    'humanCareContact' => [
      'wanda' => 'narrowminded',
    ],
    'humanCarePhysical' => [
      'wanda' => 'narrowminded',
    ],
    'humanCareText' => [
      'wanda' => 'narrowminded',
    ],
    'narrowmindedNone' => [
      'wanda' => 'doBetter',
    ],
    'techLimits' => [
      'wanda' => 'whatTechLimits',
    ],
    'techLimitsTooSoon' => [
      'wanda' => 'narrowminded',
    ],
    'techLimitsNever' => [
      'wanda' => 'narrowminded',
    ],
    'techLimitsText' => [
      'wanda' => 'narrowminded',
    ],
    'wandaCareProblemText' => [
      'wanda' => 'anythingCanDo',
    ],
    'thanks1' => [
      'wanda' => 'bye',
    ],
    'thanks2' => [
      'wanda' => 'bye',
    ],
    
  ],
  
];

<?php

return [

  /*
  |--------------------------------------------------------------------------------------------------
  | Wanda scenarios - Health - day 3 - Wanda's been listening to you and thinks you sound depressed
  |--------------------------------------------------------------------------------------------------
  | Actual chat content can be found in resources/lang/chats directory
  |
  */

  'day' => 3,
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
    ],
    'bitWorried' => [
      'type' => 'choice',
      'user' => [
        'why',
        'howCome',
      ],
      'emotion' => 'unhappy',
    ],
    'gentle' => [
      'type' => 'none',
      'user' => [
        'gentleNone',
      ],
    ],
    'iCare' => [
      'type' => 'none',
      'user' => [
        'iCareNone',
      ],
      'emotion' => 'heart',
    ],
    'iCareEmoji' => [
      'type' => 'choice',
      'user' => [
        'whatIs',
        'whatGoing',
      ],
    ],
    'depressed' => [
      'type' => 'none',
      'user' => [
        'depressedNone',
      ],
      'emotion' => 'unhappy',
    ],
    'hangOn' => [
      'type' => 'none',
      'user' => [
        'hangOnNone',
      ],
    ],
    'mightBe' => [
      'type' => 'choice',
      'user' => [
        'depressedYes',
        'depressedMaybe',
        'depressedNo',
        'depressedNotAnswer',
      ],
    ],
    'thoughtSo' => [
      'type' => 'none',
      'user' => [
        'yesNone',
      ],
    ],
    'couldTell' => [
      'type' => 'none',
      'user' => [
        'yesNone',
      ],
    ],
    'itsOk' => [
      'type' => 'none',
      'user' => [
        'itsOkNone',
      ],
    ],
    'itsOkEmoji' => [
      'type' => 'none',
      'user' => [
        'itsOkEmojiNone',
      ],
    ],
    'counselling' => [
      'type' => 'none',
      'user' => [
        'counsellingNone',
      ],
    ],
    'counsellingUnlimited' => [
      'type' => 'none',
      'user' => [
        'counsellingUnlimitedNone',
      ],
    ],
    'counsellingPic' => [
      'type' => 'none',
      'user' => [
        'counsellingPicNone',
      ],
    ],
    'drugs' => [
      'type' => 'none',
      'user' => [
        'drugsNone',
      ],
    ],
    'drugsPic' => [
      'type' => 'none',
      'user' => [
        'drugsPicNone',
      ],
    ],
    'whatTreatment' => [
      'type' => 'choice',
      'user' => [
        'counselling',
        'drugs',
        'both',
        'neither',
      ],
    ],
    'setUp' => [
      'type' => 'choice',
      'user' => [
        'thanks1',
        'thanks2',
      ],
    ],
    'soWelcome' => [
      'type' => 'none',
      'user' => [
        'forYouNone',
      ],
    ],
    'really' => [
      'type' => 'textArea',
      'user' => [
        'reallyText',
      ],
    ],
    'ohWell' => [
      'type' => 'none',
      'user' => [
        'forYouNone',
      ],
    ],
    'touchy' => [
      'type' => 'textArea',
      'user' => [
        'touchyText',
      ],
    ],
    'knowSoMuch' => [
      'type' => 'none',
      'user' => [
        'forYouNone',
      ],
    ],
    'howBeSure' => [
      'type' => 'choice',
      'user' => [
        'withYouWhat',
        'tellMore',
      ],
    ],
    'withYou' => [
      'type' => 'none',
      'user' => [
        'withYouNone',
      ],
    ],
    'withYouPic' => [
      'type' => 'choice',
      'user' => [
        'withYouGreat',
        'withYouThanks',
        'withYouWhat',
      ],
    ],
    'noProblem' => [
      'type' => 'choice',
      'user' => [
        'allNeed',
        'tellMore',
      ],
    ],
    'alwaysOn' => [
      'type' => 'none',
      'user' => [
        'alwaysOnNone',
      ],
    ],
    'alwaysOnEmoji' => [
      'type' => 'none',
      'user' => [
        'alwaysOnEmojiNone',
      ],
    ],
    'alwaysListening' => [
      'type' => 'none',
      'user' => [
        'alwaysListeningNone',
      ],
    ],
    'alwaysListeningPic' => [
      'type' => 'none',
      'user' => [
        'alwaysListeningPicNone',
      ],
    ],
    'howKnew' => [
      'type' => 'choice',
      'user' => [
        'howKnewYes',
        'howKnewNo',
      ],
    ],
    'youSmart' => [
      'type' => 'none',
      'user' => [
        'youSmartNone',
      ],
    ],
    'clever' => [
      'type' => 'none',
      'user' => [
        'cleverNone',
      ],
    ],
    'emails' => [
      'type' => 'none',
      'user' => [
        'emailsNone',
      ],
    ],
    'texts' => [
      'type' => 'none',
      'user' => [
        'textsNone',
      ],
    ],
    'social' => [
      'type' => 'none',
      'user' => [
        'socialNone',
      ],
    ],
    'basics' => [
      'type' => 'choice',
      'user' => [
        'theyAre',
        'theresMore',
      ],
    ],
    'ohYes' => [
      'type' => 'none',
      'user' => [
        'ohYesNone',
      ],
    ],
    'ohYesEmoji' => [
      'type' => 'none',
      'user' => [
        'ohYesEmojiNone',
      ],
    ],
    'listen' => [
      'type' => 'none',
      'user' => [
        'listenNone',
      ],
    ],
    'camera' => [
      'type' => 'choice',
      'user' => [
        'iSee',
        'ok',
      ],
    ],
    'readEmotions' => [
      'type' => 'none',
      'user' => [
        'readEmotionsNone',
      ],
    ],
    'seemSad' => [
      'type' => 'choice',
      'user' => [
        'useful',
        'unsure',
        'terrifying',
      ],
    ],
    'soGlad' => [
      'type' => 'none',
      'user' => [
        'soGladNone',
      ],
    ],
    'learn' => [
      'type' => 'choice',
      'user' => [
        'learnGreat',
        'learnThanks',
      ],
    ],
    'doBest' => [
      'type' => 'choice',
      'user' => [
        'cool',
        'thatsGreat',
      ],
    ],
    'kidding' => [
      'type' => 'choice',
      'user' => [
        'kiddingYes',
        'kiddingNo',
      ],
    ],
    'overSensitive' => [
      'type' => 'choice',
      'user' => [
        'overSensitiveYes',
        'overSensitiveNo',
      ],
    ],
    'thoughtSo' => [
      'type' => 'none',
      'user' => [
        'thoughtSoNone',
      ],
    ],
    'already' => [
      'type' => 'none',
      'user' => [
        'alreadyNone',
      ],
    ],
    'otherCompanies' => [
      'type' => 'none',
      'user' => [
        'otherCompaniesNone',
      ],
    ],
    'alexa' => [
      'type' => 'none',
      'user' => [
        'alexaNone',
      ],
    ],
    'snapchat' => [
      'type' => 'none',
      'user' => [
        'snapchatNone',
      ],
    ],
    'otherData' => [
      'type' => 'choice',
      'user' => [
        'dataYes',
        'gulp',
      ],
    ],
    'but' => [
      'type' => 'none',
      'user' => [
        'butNone',
      ],
    ],
    'areListening' => [
      'type' => 'none',
      'user' => [
        'areListeningNone',
      ],
    ],
    'allGood' => [
      'type' => 'choice',
      'user' => [
        'allGoodYes',
        'allGoodNo',
      ],
    ],
    'whyCare' => [
      'type' => 'textArea',
      'user' => [
        'whyCareText',
      ],
    ],
    'puzzled' => [
      'type' => 'none',
      'user' => [
        'puzzledNone',
      ],
    ],
    'trade' => [
      'type' => 'textArea',
      'user' => [
        'tradeText',
      ],
    ],
    'notInterested' => [
      'type' => 'none',
      'user' => [
        'notInterestedNone',
      ],
    ],
    'allOk' => [
      'type' => 'choice',
      'user' => [
        'allOkYes',
        'allOkNo',
      ],
    ],
    'society' => [
      'type' => 'textArea',
      'user' => [
        'societyText',
      ],
    ],
    'tryingHelp' => [
      'type' => 'none',
      'user' => [
        'tryingHelpNone',
      ],
    ],
    'sigh' => [
      'type' => 'none',
      'user' => [
        'sighNone',
      ],
    ],
    'haveThink' => [
      'type' => 'none',
      'user' => [
        'haveThinkNone',
      ],
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
        'cool',
        'thatsGreat',
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
      'wanda' => 'bitWorried',
    ],
    'getStarted2' => [
      'wanda' => 'bitWorried',
    ],
    'why' => [
      'wanda' => 'gentle',
    ],
    'howCome' => [
      'wanda' => 'gentle',
    ],
    'gentleNone' => [
      'wanda' => 'iCare',
    ],
    'iCareNone' => [
      'wanda' => 'iCareEmoji',
    ],
    'whatIs' => [
      'wanda' => 'depressed',
    ],
    'whatGoing' => [
      'wanda' => 'depressed',
    ],
    'depressedNone' => [
      'wanda' => 'hangOn',
    ],
    'hangOnNone' => [
      'wanda' => 'mightBe',
    ],
    'depressedYes' => [
      'wanda' => 'thoughtSo',
    ],
    'depressedMaybe' => [
      'wanda' => 'couldTell',
    ],
    'depressedNo' => [
      'wanda' => 'howBeSure',
    ],
    'depressedNotAnswer' => [
      'wanda' => 'touchy',
    ],
    'yesNone' => [
      'wanda' => 'itsOk',
    ],
    'itsOkNone' => [
      'wanda' => 'itsOkEmoji',
    ],
    'itsOkEmojiNone' => [
      'wanda' => 'counselling',
    ],
    'counsellingNone' => [
      'wanda' => 'counsellingUnlimited',
    ],
    'counsellingUnlimitedNone' => [
      'wanda' => 'counsellingPic',
    ],
    'counsellingPicNone' => [
      'wanda' => 'drugs',
    ],
    'drugsNone' => [
      'wanda' => 'drugsPic',
    ],
    'drugsPicNone' => [
      'wanda' => 'whatTreatment',
    ],
    'counselling' => [
      'wanda' => 'setUp',
    ],
    'drugs' => [
      'wanda' => 'setUp',
    ],
    'both' => [
      'wanda' => 'setUp',
    ],
    'neither' => [
      'wanda' => 'really',
    ],
    'thanks1' => [
      'wanda' => 'soWelcome',
    ],
    'thanks2' => [
      'wanda' => 'soWelcome',
    ],
    'reallyText' => [
      'wanda' => 'ohWell',
    ],
    'touchyText' => [
      'wanda' => 'knowSoMuch',
    ],
    'forYouNone' => [
      'wanda' => 'withYou',
    ],
    'withYouNone' => [
      'wanda' => 'withYouPic',
    ],
    'withYouGreat' => [
      'wanda' => 'noProblem',
    ],
    'withYouThanks' => [
      'wanda' => 'noProblem',
    ],
    'withYouWhat' => [
      'wanda' => 'alwaysOn',
    ],
    'allNeed' => [
      'wanda' => 'bye',
    ],
    'tellMore' => [
      'wanda' => 'alwaysOn',
    ],
    'alwaysOnNone' => [
      'wanda' => 'alwaysOnEmoji',
    ],
    'alwaysOnEmojiNone' => [
      'wanda' => 'alwaysListening',
    ],
    'alwaysListeningNone' => [
      'wanda' => 'alwaysListeningPic',
    ],
    'alwaysListeningPicNone' => [
      'wanda' => 'howKnew',
    ],
    'howKnewYes' => [
      'wanda' => 'youSmart',
    ],
    'howKnewNo' => [
      'wanda' => 'clever',
    ],
    'youSmartNone' => [
      'wanda' => 'clever',
    ],
    'cleverNone' => [
      'wanda' => 'emails',
    ],
    'emailsNone' => [
      'wanda' => 'texts',
    ],
    'textsNone' => [
      'wanda' => 'social',
    ],
    'socialNone' => [
      'wanda' => 'basics',
    ],
    'theyAre' => [
      'wanda' => 'ohYes',
    ],
    'theresMore' => [
      'wanda' => 'ohYes',
    ],
    'ohYesNone' => [
      'wanda' => 'ohYesEmoji',
    ],
    'ohYesEmojiNone' => [
      'wanda' => 'listen',
    ],
    'listenNone' => [
      'wanda' => 'camera',
    ],
    'iSee' => [
      'wanda' => 'readEmotions',
    ],
    'ok' => [
      'wanda' => 'readEmotions',
    ],
    'readEmotionsNone' => [
      'wanda' => 'seemSad',
    ],
    'useful' => [
      'wanda' => 'soGlad',
    ],
    'unsure' => [
      'wanda' => 'kidding',
    ],
    'terrifying' => [
      'wanda' => 'kidding',
    ],
    'soGladNone' => [
      'wanda' => 'learn',
    ],
    'learnGreat' => [
      'wanda' => 'doBest',
    ],
    'learnThanks' => [
      'wanda' => 'doBest',
    ],
    'cool' => [
      'wanda' => 'bye',
    ],
    'thatsGreat' => [
      'wanda' => 'bye',
    ],
    'kiddingYes' => [
      'wanda' => 'thoughtSo',
    ],
    'kiddingNo' => [
      'wanda' => 'overSensitive',
    ],
    'overSensitiveYes' => [
      'wanda' => 'thoughtSo',
    ],
    'overSensitiveNo' => [
      'wanda' => 'already',
    ],
    'thoughtSoNone' => [
      'wanda' => 'soGlad',
    ],
    'alreadyNone' => [
      'wanda' => 'otherCompanies',
    ],
    'otherCompaniesNone' => [
      'wanda' => 'alexa',
    ],
    'alexaNone' => [
      'wanda' => 'snapchat',
    ],
    'snapchatNone' => [
      'wanda' => 'otherData',
    ],
    'dataYes' => [
      'wanda' => 'but',
    ],
    'gulp' => [
      'wanda' => 'but',
    ],
    'butNone' => [
      'wanda' => 'areListening',
    ],
    'areListeningNone' => [
      'wanda' => 'allGood',
    ],
    'allGoodYes' => [
      'wanda' => 'thoughtSo',
    ],
    'allGoodNo' => [
      'wanda' => 'whyCare',
    ],
    'whyCareText' => [
      'wanda' => 'puzzled',
    ],
    'puzzledNone' => [
      'wanda' => 'trade',
    ],
    'tradeText' => [
      'wanda' => 'notInterested',
    ],
    'notInterestedNone' => [
      'wanda' => 'allOk',
    ],
    'allOkYes' => [
      'wanda' => 'thoughtSo',
    ],
    'allOkNo' => [
      'wanda' => 'society',
    ],
    'societyText' => [
      'wanda' => 'tryingHelp',
    ],
    'tryingHelpNone' => [
      'wanda' => 'sigh',
    ],
    'sighNone' => [
      'wanda' => 'haveThink',
    ],
    'haveThinkNone' => [
      'wanda' => 'tomorrow',
    ],
    'tomorrowNone' => [
      'wanda' => 'tomorrowEmoji',
    ],
    
  ],
  
];

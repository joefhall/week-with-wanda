<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Chat content - Health - day 1 - Wanda taking over your healthcare
    |--------------------------------------------------------------------------
    | Flow structure of the chat can be found in config/scenarios directory
    |
    */
  
    'wanda' => [
      'hello' => ":wandaHello",
      'observation' => ":wandaObservation",
      'acknowledgeResponse' => ":wandaAcknowledgeResponse",
      'hateWaitingDoctor' => "Don't you hate having to wait to see a doctor?",
      'hateCosts' => ":wandaPreviousSentimentResponse :wandaConjunction don't you hate having to wait to see a doctor?",
    ],
  
    'user' => [
      'hello1' => ":userHello1",
      'hello2' => ":userHello2",
      'acknowledge1' => ":userAcknowledge1",
      'acknowledge2' => ":userAcknowledge2",
      'getStarted1' => ":userGetStarted1",
      'getStarted2' => ":userGetStarted2",
      'hateWaitingDoctorPositive' => ":userAgree",
      'hateWaitingDoctorNegative' => ":userDisagree",
    ],

];

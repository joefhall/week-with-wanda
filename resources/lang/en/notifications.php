<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifications - emails and text messages
    |--------------------------------------------------------------------------
    */
  
    'health1BotCare' => [
      'email' => [
        'main' => [
          'subject' => "Come see what I've done!",
          'message' => "<p>Come see what I've done!</p> <p>It's fab!</p> <p>:loginLink</p>",
        ],
        'reminder' => "",
      ],
      'textMessage' => [
        'main' => "Come see what I've done!",
        'reminder' => "",
      ],
    ],

];

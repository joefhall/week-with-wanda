<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Chat content - Welcome and signup stage
    |--------------------------------------------------------------------------
    | Flow structure of the chat can be found in config/scenarios directory
    |
    */
  
    'wanda' => [
      'hello' => 'Well hi there!',
      'howLifeBetter' => 'How do you want your life to be better?',
      'whatWantDo' => 'What do you feel like doing?',
      'moreInfo' => 
        "I'm a super AI bot from the future. 
        Give me a week and I'll change your life... 
        Well, it's only a simulation but you can see some of the amazing 
        possibilities of AI if you give me a chance.",
      'signupChoice' => "How would you like to sign up?",
      'whatsYourName' => "What can I call you?",
      'whatsYourEmail' => "And what's your email?",
      'invalidEmail' => "Sorry, that doesn't look like a valid email address. Take another go?",
      'userExists' => "Hey :name it looks like you've already signed up? Try logging in instead",
      'choosePassword' => "Now please choose a password so we can keep our chats confidential",
      'greatThanks' => 'Great, thanks. Now just give me a sec to save your details...',
      'greatThanksFacebook' => 'Great, thanks. Now just give me a sec to save your details...',
      'okWereBack' => "Ok we're back",
      'okWereBackFacebook' => "Ok we're back",
    ],
  
    'user' => [
      'hello' => 'Hello, nice to meet you!',
      'hi' => 'Hi Wanda!',
      'findOutMore' => "I'd like to find out more",
      'getStarted' => "Get started",
      'makeLifeBetter' => "Make my life better",
      'signMeUp' => "Sign me up",
      'signupRegular' => "Sign up the old-fashioned way",
      'logBackIn' => '<a href="/login">Log back in</a>',
      'betterHealth' => "Healthier",
      'betterWealth' => "Richer",
      'betterRelationships' => "Better relationships",
    ],

];
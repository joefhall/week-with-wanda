<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Chat content - Welcome and signup stage
  |--------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */

  'description' => "Welcome and signup",

  'wanda' => [
    'hello' => "Well hi there! I'm Wanda",
    'imWanda' => "I'm here to change your life...",
    'video' => "<iframe width='200' height='200' style='display: block; margin-bottom: 0.5em;' src='https://www.youtube.com/embed/EmDxx2ghYug' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe> <a href='https://bit.ly/2VIuY0u' target='_blank'><img class='chat__messages__message__bubble__share__icon' alt='Facebook logo' src='/img/share/facebook.svg' /></a> <a href='https://twitter.com/weekwithwanda/status/1131197690631606272' target='_blank'><img class='chat__messages__message__bubble__share__icon' alt='Twitter logo' src='/img/share/twitter.svg' /></a>",
    'soGood' => "It's so good you're here",
    'initialObservation' => ":wandaInitialObservation",
    'soTellMe' => "Well that's excellent! So tell me...",
    'howLifeBetter' => "How do you want your life to be better? I want to tend to your greatest needs...",
    'whatWantDo' => 'How can I help you?',
    'moreInfo' => "Well! Let me tell you...",
    'moreInfo2' => "I am a game about the dark side of AI (a bit like Black Mirror if you've seen that)",
    'moreInfo2Emoji' => "In the game I'm a super AI bot here to make your life better... or is it really better?",
    'moreInfo3' => "🤖😬😄",
    'moreInfo4' => "I've searched the far reaches of technology - and I show you what could be possible",
    'moreInfo5' => "It's like a glimpse of the future over the course of one week, totally for FREE!",
    'moreInfo5a' => "Each day I'll message you to show you a new thing I'm capable of",
    'moreInfo5b' => "Something to make you richer, healthier or improve your relationships",
    'moreInfo6' => "<em>Nothing I'll do in this week will have real consequences or steal any of your data</em> ...But it'll give you a taste of what's possible",
    'moreInfo7' => "And you get to decide if it's the future you want",
    'moreInfo8' => "Give me a week and I promise I'll change your life",
    'moreInfoWhatSay' => "So what do you say?",
    'moreInfoPersuade' => "It'll only take a few minutes each day to try me out (and if you happen to miss a day that's ok)",
    'moreInfoPersuade2' => "It's totally harmless",
    'moreInfoPersuade3' => "And I won't keep any of your data at the end of the week",
    'moreInfoPersuade4' => "Also it'll be loads of fun!",
    'moreInfoPersuade4Emoji' => "😸",
    'moreInfoPersuadeWhatSay' => "Are you in?",
    'moreInfoNotPersuaded' => "I'm sorry to hear that! You can email my maker at <a href='mailto:hello@weekwithwanda.com' target='_blank'>hello@weekwithwanda.com</a> if you'd like to ask them any questions. Unless you're up for just giving it a go...?",
    'greatChoice' => "Great choice!! 🤩",
    'signupChoice' => "Now how would you like to sign up so we can get going?",
    'whatsYourName' => ":WandaGreat. Ok first up, what can I call you?",
    'whatsYourEmail' => "And what's your email?",
    'invalidEmail' => "Sorry, that doesn't look like a valid email address. Take another go?",
    'userExists' => "Hey it looks like you've already signed up? <a href='/login'>Try logging in instead</a>",
    'choosePassword' => "Now please choose a password so we can keep our chats confidential",
    'greatThanks' => 'Great, thanks. Just give me a sec to save your details...',
    'greatThanksFacebook' => 'Great, thanks. Just give me a sec to save your details...',
    'okWereBack' => "Ok we're back",
    'okWereBackFacebook' => "Ok we're back",
  ],

  'user' => [
    'hello' => 'Hello, nice to meet you!',
    'hi' => 'Hi Wanda!',
    'findOutMore' => "Who are you, Wanda? I want to know more",
    'moreInfoGreat' => ":UserGreat",
    'moreInfoOk' => ":UserOk1",
    'letsPlay' => "Let's go",
    'moreInfoUnsure' => ":userUnsure",
    'tryIt' => "Ok I'll give it a try!",
    'moreInfoPersuadeUnsure' => ":userUnsure",
    'moreInfoNotPersuadedTryAnyway' => "I'll give it a try anyway",
    'getStarted' => "I want to try you out",
    'signupRegular' => "Sign up with an email and password",
    'logBackIn' => '<a href="/login">Log me back in</a>',
    'betterHealth' => "Healthier",
    'betterWealth' => "Richer",
    'betterRelationships' => "Better relationships",
  ],

];

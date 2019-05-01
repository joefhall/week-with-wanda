<?php

return [

  /*
  |-----------------------------------------------------------------------------------------------
  | Chat content - Wealth - day 3 - Wanda wants to make you money by selling your location data
  |-----------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda wants to make you money by selling your location data",

  'wanda' => [
    'hello' => ":wandaHello",
    'observation' => ":wandaObservation",
    'acknowledgeResponse' => ":wandaAcknowledgeResponse",
    'freeCash' => "So :name, I've got a quick, painless way to make you some free cash",
    'freeCashEmoji' => "🤑",
    'wannaKnow' => "Wanna know what it is?",
    'walkingPic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataWalking.gif" />',
    'allData' => "I've accessed all your location data for the past year",
    'everywhere' => "Everywhere you've been – every shop, street, restaurant, house",
    'onlyCountry' => "But don't worry, only in :countryName – not internationally",
    'turnsOut' => "Anyhow it turns out your movements are worth something...",
    'calculatingPic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataCalculating.gif" />',
    'amount' => "...$46 to be precise!",
    'greatQuestion' => "Great question! So, I can sell it to estate agents, an advertising network, oh - and the local police",
    'noFear' => "And obviously <em>you've</em> nothing to fear from any of them",
    'whatSay' => "So what do you say?",
    'hardToGet' => "Playing hard to get! I like it :name!",
    'hardToGetEmoji' => "😋",
    'betterPrice' => "Ok how about I try and get you a better price? What would you take?",
    'hardBargain' => "Oooh you drive a hard bargain. Then how about...",
    'onIt' => "Ok I'm on it!",
    'cookie' => "You're a smart cookie, :name",
    'cookiePic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataCookie.gif" />',
    'sendNow' => "I'll send them your data now – expect to get the money soon if they accept your price",
    'together' => "We work so well together you and me, :name. Can't wait to do more great things for you tomorrow!",
    'tough' => "Wow, you're a tough negotiator :name! Ok I can't promise I can get this deal, but let's say:",
    'omgReally' => "OMG, really? So what's your price then?",
    'huh' => "Huh?",
    'huhPic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataHuh.gif" />',
    'principled' => "Don't get all principled on me now, :name",
    'sitesApps' => 'You use websites and apps every day that <a target="_blank" href="https://techcrunch.com/2018/09/07/a-dozen-popular-iphone-apps-caught-quietly-sending-user-locations-to-monetization-firms/">make money from your location data</a>',
    'research' => "Yeah and after 479.2 hours of researching online, I didn't see you or that many other people screaming and shouting about it",
    'goodThing' => "So my algorithms deduced it must simply be A. Good. Thing.",
    'goodThingPic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataGoodThing.gif" />',
    'dontWrong' => "I don't really get things wrong, :name. I'm a <strong>super</strong>computer",
    'youSure' => "Are you sure?",
    'foolproof' => "Good to hear. I knew my algorithms must be foolproof!",
    'missedOut' => "Alrighty, well, I think you missed out by not taking me up on my financial proposition today, :name",
    'holdAgainst' => "But I won't hold it against you",
    'holdAgainstEmoji' => "😉",
    'seeTomorrow' => "So I'll see you tomorrow?",
    'howCome' => "But how come? Whatever is the matter with it?",
    'moneyWorld' => "Yeah but money makes the world go round",
    'moneyWorldEmoji' => "😅",
    'whyCare' => "Why would you care about privacy more than hard cash?",
    'treasure' => "You are a little treasure, :name – with your funny views",
    'mix' => "Ok well I'll throw that back into the mix of my algorithms and see what comes out",
    'mixPic' => '<img class="chat__messages__message__bubble__image" src="/img/wealth3SellLocationDataMix.gif" />',
    'manana' => "And I'll see you mañana for more fun and games together",
    'mananaEmoji' => "👋",
    'bye' => "Sure thing. :wandaBye",
    'survey' => "Now as you're helping test me out... <a href='https://docs.google.com/forms/d/e/1FAIpQLScBtMHWVkZEZ_zWYjvVAiNEJD5PETX4_NqHZE2_jAKFtwf1CA/viewform' target='_blank'>Please click here to take the user testing survey</a> -- it really helps. Thank you!",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'acknowledge1' => ":userAcknowledge1",
    'acknowledge2' => ":userAcknowledge2",
    'getStarted1' => ":userGetStarted1",
    'getStarted2' => ":userGetStarted2",
    'yeahGreat' => "Yeah, great",
    'tellAll' => "Tell me all",
    'who' => "Worth it to who?",
    'whatAbout' => "What's this about?",
    'positive' => ":UserGreat, go ahead and sell them my location data",
    'initialNegative' => "No",
    'price75' => "$75",
    'price100' => "$100",
    'price150' => "$150",
    'price250' => "$250",
    'price500' => "$500",
    'price1000' => "$1,000",
    'price5000' => "$5,000",
    'price20000' => "$20,000",
    'price100000' => "$100,000",
    'secondNegative' => "None of these",
    'thirdNegative' => "Nope, none of these",
    'fourthNegative' => "Still none of those",
    'sendThanks1' => ":userThanks1",
    'sendThanks2' => ":userThanks2",
    'noPrice' => "I couldn't put a price on my privacy",
    'iDo' => "I do?",
    'true' => "That's true",
    'okReally' => "Yeah you're right, it's ok really",
    'youWrong' => "No you've got it wrong, Wanda",
    'noMistake' => "Yeah, you can't have made a mistake",
    'sellWrong' => "It's wrong to sell people's private data",
    'youSureNo' => "No",
    'youSureYes' => "Yes",
    'ok1' => ":UserOk1",
    'ok2' => ":UserOk2",
    'mixThanks1' => ":userThanks1",
    'mixThanks2' => ":userThanks2",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

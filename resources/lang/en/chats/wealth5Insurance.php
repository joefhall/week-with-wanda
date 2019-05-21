<?php

return [

  /*
  |----------------------------------------------------------------------------------------------------
  | Chat content - Wealth - day 5 - Wanda offers you a better insurance deal based on your skin colour
  |----------------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda offers you a better insurance deal – based on your skin colour",
  'explanation' => "Racial bias (and bias of other kinds, such as gender) is a real and live issue in AI – with <a href=\"https://www.wired.com/story/ideas-joi-ito-insurance-algorithms/\">insurance just one example</a>. How much of this is down to tech itself still being dominated by people who are white, male, Western and university-educated? How can it get more representative and more responsible?",
  
  'wanda' => [
    'name' => ":name!",
    'nameName' => ":name :name :name :name :name!",
    'deal' => "GREAT DEAL ALERT!!",
    'alarmPic' => "<img class='chat__messages__message__bubble__image' src='/img/wealth5InsuranceAlarm.gif' />",
    'save' => "I've found a way to save you a whole bunch of money!",
    'companies' => "Well, I've created a partnership with the 5 leading insurance companies",
    'magic' => "And through the clever magic of my algorithms, I can reveal",
    'safe' => "<strong>You</strong> must be a very safe person, :name",
    'skin' => "Well, it turns out that people with <strong>your</strong> skin colour are <em>much</em> better drivers than other people",
    'homes' => "You take <em>a lot</em> better care of your homes",
    'accidents' => "AND you have fewer accidents of basically <em>all kinds</em>",
    'so' => "Sooo............",
    'offer' => "We can offer YOU a 42% saving on all your insurance!!",
    'whatSay' => "Whaddayasay?",
    'persuade' => "Hmmm ok how can I persuade you? Well here are a couple of awesome things...",
    'awesome' => "Awesome!",
    'awesomeEmoji' => "🤘",
    'process' => "I'll start processing your deal now!",
    'saveMore' => "Soon I might be able to save you even more 💰💰💰",
    'refusing' => "We're going to experiment with <em>completely refusing</em> insurance to high-risk groups",
    'ethnic' => "Some ethnic groups just aren't worth it, from what I can see",
    'glad' => "So glad you're with me on this, :name",
    'complaints' => "Because to be totally honest, I've had some complaints",
    'happy' => "But you can't keep all the people happy all the time, can you?!",
    'but' => "But I'm saving you money – you wanted to get richer, :name!",
    'whatMind' => "What's on your mind?",
    'sake' => "Oh for *@&#'s sake, :name!",
    'always' => "There's always something with you, isn't there?",
    'affect' => "It doesn't affect YOU",
    'whyCare' => "So why do you care so much about what I'm suggesting??",
    'devilEmoji' => "👺",
    'oh' => "Oh :name!",
    'fuse' => "I feel like I'm going to blow a fuse here soon",
    'cumulative' => ":wandaCumulativeResponse",
    'break' => "I think I need a little break from you for now",
    'tomorrow' => "I'll see you very soon...",
    'please' => "I hope I can please you then",
    'bye' => ":wandaBye",
    'happyEmoji' => "🤣",
    'great' => ":WandaGreat, well I'm going to go put through your shiny new deal",
    'silence' => "And silence the complainers",
    'think' => "Plus of course, think of something even awesomer I can do for you next!",
    'byeEnd' => "Bye! ...Ooh and :name there are so many people I still need to reach! Could you share, pretty please? <img class='chat__messages__message__bubble__image chat__messages__message__bubble__image--below-text' alt='Sharing image' src='/img/share/wealth5Insurance.png' />",
  ],

  'user' => [
    'what' => "What is it?",
    'whassup' => "Whassup?",
    'saveWhat' => "Ooh, what?",
    'saveTell' => "Tell me more",
    'safeWhy' => "Why?",
    'safeHow' => "How come?",
    'whatSayAgree' => "I'll take it!",
    'whatSayUnsure' => ":userUnsure",
    'processThanks1' => ":userThanks1",
    'processThanks2' => ":userThanks2",
    'ethnicAgree' => ":userAgree",
    'ethnicUnsure' => ":userUnsure",
    'ethnicDisagree' => ":userDisagree",
    'breakOk' => ":UserOk1",
    'breakToo' => "Me too",
    'pleaseThanks' => ":userThanks1",
    'pleaseGreat' => ":UserGreat",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
    'happyAgree' => ":userAgree",
    'happyOk' => ":UserOk1",
    'thinkThanks1' => ":userThanks1",
    'thinkThanks2' => ":userThanks2",
  ],

];

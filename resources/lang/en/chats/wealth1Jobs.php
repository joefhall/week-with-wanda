<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Chat content - Wealth - day 1 - Wanda doing a job for you
  |--------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda wants to take on a job – so you don't have to earn",
  'explanation' => "We increasingly hear about AI and robots taking over jobs – <a href=\"https://www.forbes.com/sites/forbestechcouncil/2018/01/26/if-youre-worried-about-ai-taking-your-job-consider-this/#372e257d768a\">maybe it's a good thing?</a> Perhaps it would <a href=\"https://www.bbc.co.uk/news/business-44849492\">create as many jobs as it removes</a> (perhaps it wouldn't) – but even if it did, are we ok with some people losing their roles, livelihoods and purpose? And should <a href=\"https://www.theguardian.com/commentisfree/2018/jul/02/robo-carers-human-principles-technology-care-crisis\">some jobs be out of bounds</a> – where we only want humans?",

  'wanda' => [
    'hello' => ":wandaHello",
    'observation' => ":wandaObservation",
    'acknowledgeResponse' => ":wandaAcknowledgeResponse",
    'intro' => "So I was thinking about what you said about wanting to be richer",
    'takeCare' => "I really want to take care of you, :name 😊 I want you to have everything you dream of",
    'wantToWork' => "I want to go out to work for you. I want to earn a living for you – so you don't have to",
    'superComputer' => "Now as you probably know, I'm a vast supercomputer (some might even say super-duper-computer!) with enormous power",
    'superComputerPic' => "<img class='chat__messages__message__bubble__image' src='/img/wealth1JobsSuperComputer.gif' />",
    'doneTraining' => "Since we last spoke, overnight I've rapidly completed several Masters degrees and training courses... I can hoover up information & I just love to learn!",
    'scholar' => "👩‍🎓",
    'whatCouldDo' => "So with my new skills I could take on a human job and be awesome at it, earning money for you! Do you know what I could do?",
    'jobsCouldDo' => "Here are jobs I could take on... What shall I go for?",
    'rocketScientistGreat' => "Great choice! 👊 Pretty good money-spinner for you – and you don't want pesky human error in something important like building rockets.",
    'artistGreat' => "Great choice! 👊 I've been crunching algorithms to work out what makes the best art. I think I'll be brilliant at it",
    'nurseGreat' => "Good choice! 👊 It won't earn you as much as some of those other jobs though 🤔 Why did you pick nurse?",
    'bankerGreat' => "Great choice! 👊 That'll earn you the most 💸💸💸! Isn't it better hiring bots like me to take over jobs like finance?",
    'anotherJob' => "Is there another job you'd like me to do for you? Plumber? 💧 Trapeze artist? 🤸‍♀️ Sex therapist? 💘",
    'notGood' => "What's the problem, :name? Don't you think I'd be good at this?",
    'asManyJobs' => "Yeah, :wandaGreat. Shouldn't awesome AIs like me take over as many jobs as possible, so you humans can focus on other things?",
    'startApplying' => ":WandaGreat, well I'll get applying for that job then. Expect the cash to start rolling into your bank account soon!",
    'startApplyingEmoji' => "🤑",
    'aiLimitsWhat' => "What limits are you talking about?",
    'specificJobsWhat' => "Really?! What kind of jobs should be off-limits for bots then?",
    'specificJobsUnderstand' => "I don't really understand why! Why can't I do any job?",
    'narrowminded' => "Hmm, well I think you're being a bit narrowminded. But I'll have a think about what you said.",
    'getDown' => "Ok well I guess I can get down with that",
    'makingYouRicher' => "I was really only thinking about making *you* richer, :name",
    'makingYouRicherEmoji' => "🤑",
    'haveAThink' => "But I'll go have a think about what you said",      
    'bye' => ":wandaBye",
    'byeEnd' => "Bye! ...And if you enjoyed today, would you share me so I can help other people? <img class='chat__messages__message__bubble__image chat__messages__message__bubble__image--below-text' alt='Sharing image' src='/img/share/wealth1Jobs.png' />",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'acknowledge1' => ":userAcknowledge1",
    'acknowledge2' => ":userAcknowledge2",
    'getStarted1' => ":userGetStarted1",
    'getStarted2' => ":userGetStarted2",
    'thatsNice' => "That's nice",
    'whatThinking' => "Ok so what are you thinking?",
    'oohWhat' => "Ooh, what?",
    'tellMe' => "Tell me!",
    'rocketScientist' => "Rocket scientist 🚀",
    'artist' => "Artist 🎨",
    'nurse' => "Nurse 🤕",
    'banker' => "Banker 💰",
    'noneJobs' => "None of these",
    'allGood' => "Yep, all good",
    'fewWorriesRocketScientist' => "Hmm I do have a few qualms",
    'youWill' => "Yep, I'm sure you will",
    'fewWorriesArtist' => "Actually I do have a few worries",
    'aiToughJobs' => "AI should do tough jobs so people don't have to",
    'aiUsefulSociety' => "AI should do something useful for society",
    'fewWorriesNurse' => "Actually I have a few worries",
    'aiMostMoney' => "I want AI to make the most money possible",
    'aiSoullessJobs' => "AI should take over soulless jobs",
    'fewWorriesBanker' => "Well I don't feel entirely comfortable",
    'asManyJobsAgree' => ":userAgree",
    'aiLimits' => "I think there should be limits on AI",
    'asManyJobsDisagree' => ":userDisagree",
    'aiLimitsSpecific' => "Only certain kinds of jobs should be done by computers",
    'aiLimitsWealth' => "The wealth has to be spread amongst society",
    'aiLimitsKeepJobs' => "We've got to keep enough jobs for people",
    'aiNoJobs' => "I don't think AI should be doing any job",
    'anotherJobDisagree' => ":userDisagree",
    'thanks1' => ":userThanks1",
    'thanks2' => ":userThanks2",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

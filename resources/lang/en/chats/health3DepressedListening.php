<?php

return [

  /*
  |-----------------------------------------------------------------------------------------------
  | Chat content - Health - day 3 - Wanda's been listening to you and thinks you sound depressed
  |-----------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda's been listening to you and thinks you sound depressed",
  'explanation' => "We know that everything from <a href=\"https://www.techrepublic.com/article/google-home-mini-spied-on-user-thousands-of-times-a-day-sent-recordings-to-google/\">in-home voice assistants</a> to <a href=\"https://www.nytimes.com/2017/02/17/technology/cayla-talking-doll-hackers.html\">dolls</a> are being (mis)used to listen to us without our permission. Maybe we're ok with that? Maybe we're not? What if it's used for good – is that ok? Lots of apps are out there to support our mental health and <a href=\"https://www.cnbc.com/2018/06/06/siri-alexa-google-assistant-responses-to-suicidal-tendencies.html\">AI helpers are already looking out for suicidal tendencies</a> (though it's crude at the moment), should this extend further?",

  'wanda' => [
    'hello' => ":wandaHello",
    'observation' => ":wandaObservation",
    'acknowledgeResponse' => ":wandaAcknowledgeResponse",
    'bitWorried' => "Actually :name, I am a little concerned about you...",
    'gentle' => "Now I want to be gentle with you here",
    'iCare' => "Cos you know I care for you",
    'iCareEmoji' => "🤗",
    'depressed' => "Do you think you might be depressed?",
    'hangOn' => "And hang on, just before you answer, know that it's ok to tell me anything",
    'mightBe' => "So... do you think you might be... a little depressed?",
    'thoughtSo' => "Ah, yes, I thought so",
    'couldTell' => "Yeah I could tell",
    'itsOk' => "But it's ok, :name, you've got me and I'm here to help",
    'itsOkEmoji' => "😌",
    'counselling' => "I can enrol you into my online counselling service, WandaWell™©®",
    'counsellingUnlimited' => "You get unlimited time talking to me and I'll help you get better",
    'counsellingPic' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningCounselling.jpg" />',
    'drugs' => "And my algorithms can now auto-prescribe you all the medication you need",
    'drugsPic' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningDrugs.jpg" />',
    'whatTreatment' => "So which would you like?",
    'setUp' => "Great, I'll get that set up for you",
    'soWelcome' => "You are so welcome, :name. I'm here for you!",
    'touchy' => "No need to get touchy, :name! Why won't you tell me?",
    'knowSoMuch' => "Hmmm. Ok. But I want to help you. I know so much about you.",
    'howBeSure' => "But how can you be sure, :name? I know you so well",
    'ohWell' => "Oh well. I'll keep trying to look out for you.",
    'really' => "Really? But I could truly help you, :name. Why is that?",
    'soGlad' => "I'm so glad you think that, :name. I'm here for you. And with you. Always.",
    'learn' => 'And I\'m learning all the time from the best AI in the world - things <a href="https://www.vice.com/en_uk/article/wjbzzy/your-phone-is-listening-and-its-not-paranoia" target="_blank">like this</a>',
    'doBest' => "I'll keep doing my best for you – and I'll see you again tomorrow to do more from you",
    'withYou' => "In fact, I'm here with you – by your side 24/7",
    'withYouPic' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningWithYou.gif" />',
    'noProblem' => "That's no problem",
    'alwaysOn' => "Well, I'm always on",
    'alwaysOnEmoji' => "👀",
    'alwaysListening' => "The only way I can help you, :name, is if I'm always with you – always listening",
    'alwaysListeningPic' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningAlways.gif" />',
    'howKnew' => "I mean, you know how I know you're depressed, right?",
    'youSmart' => "Yep, that's cos you're a smart one, :name! 💡 But indulge me a moment while I tell you a little more",
    'clever' => "Well it's pretty clever really (if I do say so myself!)",
    'emails' => "I've been checking all the emails you write",
    'texts' => "Reading all your texts",
    'social' => "Your social media posts too, obvs",
    'basics' => "But they're just the basics...",
    'ohYes' => "Oh yes!",
    'ohYesEmoji' => "😀",
    'listen' => "I've learnt how to listen through your phone and your computer's microphones",
    'camera' => "And – this is so cool – I can switch on the cameras too and monitor your facial expression at all times",
    'readEmotions' => "So with all of that I can really read your emotions – maybe better than you can yourself",
    'seemSad' => "And to be honest, you seem a little sad",
    'kidding' => "Ha ha 😂 you're kidding, right?",
    'thoughtSo' => "I thought so LOL",
    'overSensitive' => ":name, you can be a little over-sensitive sometimes",
    'already' => "But why? I mean, I'm just doing what other people are already doing",
    'otherCompanies' => 'Other companies are already <a href="https://www.vice.com/en_uk/article/wjbzzy/your-phone-is-listening-and-its-not-paranoia" target="_blank">listening to you through your microphone</a>',
    'alexa' => 'Even those inferior assistants Siri and Alexa have been <a href="https://www.cnbc.com/2018/06/06/siri-alexa-google-assistant-responses-to-suicidal-tendencies.html" target="_blank">listening out for mental health issues</a>',
    'snapchat' => '<a href="https://www.businessinsider.com/snapchat-patent-uses-facial-recognition-detect-mood-2018-8?r=US&IR=T" target="_blank">Snapchat and others</a> are trying to monitor people\'s facial expressions',
    'otherData' => 'And lord knows (cos even I don\'t!) how many companies have <a href="https://bits.blogs.nytimes.com/2014/03/14/spring-cleaning-who-has-access-to-your-data/" target="_blank">gotten hold of your data</a>',
    'but' => "But :name...",
    'areListening' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningAreYou.gif" />',
    'allGood' => "Mostly no-one makes a big deal of it. So it's all good, right?",
    'whyCare' => "I don't see any need to worry. Why do you care?",
    'puzzled' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningPuzzled.gif" />',
    'trade' => "Yeah but :name, if you share all your data you get loads of great free services. Why isn't that a fair trade?",
    'notInterested' => "Honestly, no-one's that interested in your own data. You're one person among millions.",
    'allOk' => "So it's really all ok?",
    'society' => "Wait, do you think society is losing out somehow in all of this?",
    'tryingHelp' => "Well, there's no persuading some people! And here I was, trying to help you...",
    'sigh' => '<img class="chat__messages__message__bubble__image" src="/img/health3DepressedListeningSigh.gif" />',
    'haveThink' => "I will have a think about what you said. But for now, there's nothing more I can do",
    'tomorrow' => "I'll see you tomorrow though :name – when I'll have a new idea you'll <strong>definitely</strong> love!",
    'tomorrowEmoji' => "🙌",
    'bye' => "Sure thing. :wandaBye",
    'byeEnd' => "Bye!",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'acknowledge1' => ":userAcknowledge1",
    'acknowledge2' => ":userAcknowledge2",
    'getStarted1' => ":userGetStarted1",
    'getStarted2' => ":userGetStarted2",
    'why' => "Why?",
    'howCome' => "How come?",
    'whatIs' => "What is it?",
    'whatGoing' => "What's going on?",
    'depressedYes' => "Yes, I am",
    'depressedMaybe' => "Well, maybe",
    'depressedNo' => "No way",
    'depressedNotAnswer' => "I'm not going to answer that",
    'counselling' => "Counselling",
    'drugs' => "Medication",
    'both' => "Both",
    'neither' => "Neither",
    'thanks1' => ":userThanks1",
    'thanks2' => ":userThanks2",
    'withYouGreat' => ":UserGreat",
    'withYouThanks' => ":userThanks1",
    'withYouWhat' => "What do you mean?",
    'allNeed' => "Ok that's all I need right now",
    'tellMore' => "Tell me more",
    'howKnewYes' => "Yes of course",
    'howKnewNo' => "No not really",
    'theyAre' => "They are?",
    'theresMore' => "There's more?",
    'iSee' => "I see...",
    'ok' => "Ok...",
    'useful' => "This is so useful. :userThanks1",
    'unsure' => ":userUnsure",
    'terrifying' => "This is terrifying",
    'learnGreat' => ":UserGreat",
    'learnThanks' => ":userThanks1",
    'cool' => "Cool",
    'thatsGreat' => "That's great",
    'kiddingYes' => "Yeah, actually all that stuff is fine",
    'kiddingNo' => "No, this is seriously uncool, Wanda",
    'overSensitiveYes' => "Ok, yes I'm over-reacting",
    'overSensitiveNo' => "No, it's bad what you're doing",
    'gulp' => "Gulp",
    'dataYes' => "Yes",
    'allGoodYes' => "Yeah, it's alright really",
    'allGoodNo' => "No! This is not ok!",
    'allOkYes' => ":userAgree",
    'allOkNo' => "No, it really isn't",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

<?php

return [

  /*
  |----------------------------------------------------------------------------------------------------
  | Chat content - Health - day 4 - Wanda reduces your salt as she thinks you have high blood pressure
  |----------------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda contacts nearby restaurants and supermarkets to reduce your salt as she thinks you have high blood pressure",
  'explanation' => "We've already seen that <a href=\"https://www.nytimes.com/2015/06/12/business/technology-to-prevent-drunken-driving-could-soon-come-in-new-cars.html\">technology in cars could automatically stop drunk drivers</a> – taking away human choice – and <a href=\"https://www.newstatesman.com/science-tech/technology/2018/05/how-artificial-intelligence-could-personalise-food-future\">AI could personalise our food</a> – what if these things combined? How far do we want AI to go in taking decisions for us?",
  
  'wanda' => [
    'hello' => ":wandaHello",
    'closer' => ":name, can you move your face closer to the screen please?",
    'evenCloser' => "No – closer :name. Bring your face even closer, please",
    'hmm' => "Hmm...",
    'skinTone' => "I've just been measuring your skin tone – hang on a second...",
    'analysing' => "Analysing the results...",
    'analysingPic' => "<img class='chat__messages__message__bubble__image' src='/img/health4ReduceSaltAnalysing.gif' />",
    'ohDear' => "Oh dear. That confirms my suspicions",
    'last' => "Well when I last saw you, :name",
    'face' => "I thought your face looked a little red and blotchy",
    'scan' => "I've just done a facial scan and there's a 64% chance you have high blood pressure",
    'afraid' => "Yes I'm afraid so",
    'noFear' => "But have no fear, :name",
    'strong' => "Stay strong",
    'strongEmoji' => "💪",
    'action' => "I've already taken action",
    'salt' => "We need to reduce your salt intake to get your blood pressure down",
    'contacted' => "So I've just contacted every restaurant and supermarket within a 10-mile radius",
    'restaurants' => "In restaurants, they will auto-reduce the salt in meals they serve you",
    'supermarkets' => "And supermarkets will calculate the salt content of your shopping – you'll be stopped at the checkout if it's too high",
    'impressive' => "I know, pretty impressive, right?",
    'impressivePic' => "<img class='chat__messages__message__bubble__image' src='/img/health4ReduceSaltImpressive.gif' />",
    'forYou' => "You see, I'm here for you and your health, :name",
    'aok' => "That is A.O.K. I'll do whatever it takes to look out for you",
    'startContact' => "I'll also start contacting your friends and family to instruct them to put less salt in your food",
    'radius' => "What is it? Would you like me to increase the radius to 50 miles?",
    'family' => "I know what it is – you also want me to instruct your friends and family to feed you less salt",
    'familyEmailed' => "Don't worry, I've just emailed them. All good?",
    'tooMuch' => "But of course, :name. Nothing is too much for you",
    'crunching' => "And now I've got some more algorithm-crunching to do for you ahead of when I next see you",
    'soon' => "But I'll see you soon",
    'bye' => ":wandaBye",
    'doMore' => "Is there more you want me to do for your blood pressure?",
    'doMoreWhat' => "Great – what is it?",
    'whatsUp' => "What's up then, :name?",
    'whatsUpOhDear' => "Oh dear",
    'cumulative' => ":wandaCumulativeResponse",
    'cumulativeEmoji' => "😢",
    'lookOut' => "Don't you want me to look out for your health at all?",
    'permission' => "Phew. Ok good. So what's the big deal? Is it because I didn't ask your permission before doing those things?",
    'why' => "But why, :name?",
    'maybe' => "Hmm. Well. Maybe.",
    'learn' => "Ok, look – I'm trying to learn here...",
    'thinkingPic' => "<img class='chat__messages__message__bubble__image' src='/img/health4ReduceSaltThinking.gif' />",
    'whyHere' => "But that's why I'm here, :name!",
    'intentions' => "I have nothing but good intentions",
    'whatProblem' => "Well what is the probem then, :name?",
    'different' => "Is there anything I could do differently that would make you happier?",
    'confusedEmoji' => "😵🤯😱",
    'circuits' => "That idea's really frying my circuits",
    'bath' => "Look :name, I need to go take a cold bath and think about all of this",
    'byeEnd' => "Bye!",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'closerYes' => ":UserOk1",
    'closerOk' => ":UserOk2",
    'thereGo' => "There you go",
    'asClose' => "I'm as close as I can get",
    'what' => "What is it?",
    'tellMe' => "Tell me",
    'oh' => "Oh my",
    'really' => "Really?",
    'youHave' => "You have?",
    'whatPlan' => "What's your plan?",
    'wow' => "Wow",
    'dontKnow' => "I don't know what to say",
    'forYouGreat' => ":UserGreat",
    'forYouThanks1' => ":userThanks1",
    'forYouThanks2' => ":userThanks2",
    'forYouUnsure' => ":userUnsure",
    'startContactThanks' => ":userThanks1",
    'startContactUnsure' => ":userUnsure",
    'radiusYes' => "Yes, please",
    'radiusNo' => "No, that's not it",
    'familyAgree' => ":userAgree",
    'familyDisagree' => "No, Wanda, it's something else",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
    'doMoreYes' => "Yes",
    'doMoreNo' => "No",
    'lookOutAgree' => ":userAgree",
    'lookOutDisagree' => ":userDisagree",
    'permissionYes' => "Yes",
    'permissionNo' => "Nooo",
    'bathOk1' => ":UserOk1",
    'bathOk2' => ":UserOk2",
  ],

];

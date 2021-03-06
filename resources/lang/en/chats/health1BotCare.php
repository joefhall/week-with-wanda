<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Chat content - Health - day 1 - Wanda taking over your health care
  |--------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */

  'description' => "Wanda wants to be the bot who takes over all your health care needs",
  'explanation' => "AI and robots are increasingly part of our health and care, but that could mean anything from <a href=\"https://www.theguardian.com/society/2019/apr/12/hospital-develops-ai-to-identify-patients-likely-to-skip-appointments\">helping get people to appointments</a> or <a href=\"https://www.theguardian.com/commentisfree/2018/jul/02/robo-carers-human-principles-technology-care-crisis\">potentially taking over social care.</a> Bots can't yet do what Wanda offers – taking over your care entirely – but it's not unimaginable. How far should it go?",
  
  'wanda' => [
    'hello' => ":wandaHello",
    'observation' => ":wandaObservation",
    'acknowledgeResponse' => ":wandaAcknowledgeResponse",
    'hateWaitingDoctor' => "Don't you hate having to wait to see a doctor?",
    'hateCosts' => ":wandaPreviousSentimentResponse :wandaConjunction don't you hate all the costs around medical care?",
    'gotGreatSurprise' => ":wandaPreviousSentimentResponse Well I've got a great surprise for you...",
    'drumRoll' => "Drum roll please...",
    'announcing' => "Announcing........",
    'wandaCare' => "WandaCare!™©®",
    'getGoing' => "I'll get going transferring over your medical records to me! And I'll think up something even more awesome to do for you next",
    'wandaCarePic' => '<img class="chat__messages__message__bubble__image" src="/img/health1BotCareWandaCare.jpg" />',
    'wandaCareMore' => "Well, :name, imagine a world where you no longer have to worry about health care at all – because I've got you covered.",
    'wandaCareMore2' => "I'll use my AI smarts to diagnose you instantaneously when something's wrong with you...",
    'wandaCareMore3' => "I'll prescribe you treatment straight away – no waiting and no pesky human error...",
    'wandaCareMore4' => "For physical treatments my WandaCareBot will see to you",
    'wandaCareMore4Pic' => '<img class="chat__messages__message__bubble__image" src="/img/health1BotCareRobotNurse.jpg" />',
    'wandaCareMore4a' => "Right through to old age (when no-one else wants to take you to the toilet or give you a sponge bath, I will!)",
    'wandaCareMore5' => "<em>You'll never need care from another human being again.</em> :wandaExpectPositiveResponse",
    'whatsProblem' => "Oh :name! What's the big problem?",
    'whyCareMattersMoreHuman' => 'But us computers and robots are getting more cuddly and human-like all the time. Look at <a href="https://www.youtube.com/watch?v=kWlL4KjIP4M" target="_blank">Sophia</a> for example - she\'s one of my heroes!',
    'whyCareMattersPic' => '<img class="chat__messages__message__bubble__image" src="/img/sophia-cropped.jpg" />',
    'whyCareMatters' => "Can't we be just as human as you?",
    'whatTechLimits' => 'Well, for sure we have <strong>some</strong> limits right now (like the time <a href="https://www.forbes.com/sites/matthewherper/2017/02/19/md-anderson-benches-ibm-watson-in-setback-for-artificial-intelligence-in-medicine/" target="_blank">my buddy Watson recommended unsafe cancer treatments</a> - but let\'s get over that!) What are you worried about?',
    'anythingCanDo' => "Is there anything I could do to win you round?",
    'thinkAboutThat' => "Hmm interesting, :name. I'll need to go away and think about that one.",
    'narrowminded' => "Ok well, I hear you. But I also think you're being a wee bit narrowminded, :name 😜 Anyhow...",
    'doBetter' => "I'll try to do better next time and find something else that'll change your life! Better go for now.",
    'bye' => ":wandaBye",
    'gladLoveIt' => "Ah :name, I just knew you'd like it",
    'byeEnd' => "Bye! ...And if you enjoyed today, would you share me so I can help other people? <img class='chat__messages__message__bubble__image chat__messages__message__bubble__image--below-text' alt='Sharing image' src='/img/share/health1BotCare.png' />",
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
    'hateCostsPositive' => ":userAgree",
    'hateCostsNegative' => ":userDisagree",
    'requestMoreInfo1' => ":userRequestMoreInfo1",
    'requestMoreInfo2' => ":userRequestMoreInfo2",
    'wandaCareLove' => ":userLove",
    'wandaCareUnsure' => ":userUnsure",
    'wandaCareHate' => ":userHate",
    'humanCare' => "Only a human can give real care",
    'humanCareContact' => "Nothing can ever replace true care - real human connection",
    'humanCarePhysical' => "I think a robot would be too clumsy at the physical stuff",
    'techLimits' => "I don't trust a bot's judgment",
    'techLimitsTooSoon' => "It's too soon - the tech needs to improve first",
    'techLimitsNever' => "I will never trust a computer like a human",
    'thanks1' => ":userThanks1",
    'thanks2' => ":userThanks2",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

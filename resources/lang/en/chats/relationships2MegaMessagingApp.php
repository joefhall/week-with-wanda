<?php

return [

  /*
  |----------------------------------------------------------------------------------------------------
  | Chat content - Relationships - day 2 - Wanda wants to buy up every messaging app and combine them
  |----------------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda wants to buy up every messaging app and combine them into one, to make life easier for you",
  'explanation' => "It would take a lot of money to do this of course, but tech companies are getting bigger and bigger – and are <a href=\"https://www.cbinsights.com/research/top-acquirers-ai-startups-ma-timeline/\">snapping up other companies at a faster and faster rate.</a> Is it better (and is it ok) having lots of power in the hands of a few, whether it's messaging or anything else?",
  
  'wanda' => [
    'hello' => ":wandaHello",
    'glad' => "I'm so glad you saw my message",
    'missMessages' => "You quite often miss messages from your friends and family, :name",
    'analysing' => "Yes, I've been analysing your emails, social media accounts and all the messages you receive on your phone",
    'analysingPic' => '<img class="chat__messages__message__bubble__image" src="/img/relationships2MegaMessagingAppReading.gif" />',
    'pretty' => "It isn't a pretty picture",
    'missed' => "In the past year you've missed...",
    'invitations' => "12 invitations from friends wanting to see you...",
    'birthdays' => "7 birthday parties...",
    'niceMessages' => "4 <em>really nice</em> messages from some of your favourite people...",
    'neededHelp' => "...and 1 cry for help from someone who really needed you at a tough time in their life 😭",
    'notBad' => "Now I'm not saying you're a bad person",
    'lovely' => "In fact, I know how lovely you are (well, I did read all your messages!)",
    'techProblem' => "No, what we have here is a technology problem. It's so hard keeping up with all the different messages in different places",
    'comeIn' => "And that's where I come in...",
    'tada' => '<img class="chat__messages__message__bubble__image" src="/img/relationships2MegaMessagingAppTada.gif" />',
    'greatIdea' => "I have a great idea for you, :name – and the world",
    'facebook' => "Well, I spotted how Facebook have bought up WhatsApp and Instagram",
    'brilliant' => "It's brilliant. But it doesn't go far enough...",
    'everyPlatform' => "No. What we need is every messaging platform <strong>all brought together into one.</strong> Facebook. Instagram. Gmail. Hotmail. LinkedIn. Twitter. And the rest",
    'behindScenes' => "I've quietly been working behind the scenes to line up some of the world's biggest investors so I can buy up <em>all these companies</em>",
    'proveUsers' => "The only thing I now need to prove to them is that users really want this. So what do you say, :name?",
    'bigDeal' => "Ok, I know this is a big deal (literally!) But just think how much easier your life will be – every message in one place from the people you love 💌",
    'comeNow' => "Oh come now, don't you see the benefits? 👍👍👍🆒🆕🆙",
    'frustrationPic' => '<img class="chat__messages__message__bubble__image" src="/img/relationships2MegaMessagingAppFrustration.gif" />',
    'whoopPic' => '<img class="chat__messages__message__bubble__image" src="/img/relationships2MegaMessagingAppWhoop.gif" />',
    'goodThing' => "You knew a good thing when you see it!",
    'restOfUsers' => "Well if I can persuade most of the rest of my users, expect to see all those other companies disappear soon – just one super Wanda app!",
    'ach' => "Ach, :name!! Seriously?! Don't rain on my parade! What's the problemo?",
    'paranoid' => "There's no need to be paranoid! Really, why does that bother you?",
    'moveOn' => "But the world needs to move on. Why isn't this a good thing?",
    'okWhat' => "Really? Ok what?",
    'enoughReason' => "Hmmmmmmmm. But is that really a good enough reason to block my multi-billion 💲💲💲 deal?",
    'oneWay' => "Welllllll..... I guess that's one way of looking at things",
    'easierLife' => "You're not making my life easier though, :name – or your own!",
    'needOtherUsers' => "Look, I'd like to talk more about this... But there are thousands of other users I need to talk to right now. Can I catch you tomorrow?",
    'whateverHappens' => "Whatever happens with this deal, I'll have something else great for you then",
    'government' => "Oh, and an extra bonus – your government want to work with me on it, something about \"sharing data to fight crime\". Great news all round!",
    'betterGo' => "Anyhow, better go speak to my other users now. See you tomorrow for more great things!",
    'bye' => ":wandaBye",
    'survey' => "Now as you're helping test me out... <a href='https://docs.google.com/forms/d/e/1FAIpQLSf6eVFTIEURV-EXx4rDRR81ghqoYTiVSHNuWLvF2ncXHXcmrA/viewform' target='_blank'>Please click here to take the user testing survey</a> -- it really helps. Thank you!",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'doI' => "Do I?",
    'yeahTrue' => "Yeah, that's probably true",
    'huh' => "Huh?",
    'whatMean' => "What do you mean?",
    'hmm' => "Hmm",
    'ohDear' => "Oh dear",
    'lovelyEmoji1' => "😊",
    'lovelyEmoji2' => "😜",
    'techAgree' => ":userAgree",
    'techOk' => ":UserOk1",
    'ohYes' => "Oh yes?",
    'rustling' => "What have you been rustling up?",
    'brilliantNo' => "No?",
    'brilliantReally' => "Really?",
    'provePositive1' => ":userAgree",
    'provePositive2' => ":UserGreat",
    'proveUnsure' => ":userUnsure",
    'whoopEmoji1' => "🙌",
    'whoopEmoji2' => "😸",
    'goodThingPositive' => ":userAgree",
    'goodThingDo' => "Indeed I do",
    'bigDealUnsure' => ":userUnsure",
    'bigDealNegative' => ":userDisagree",
    'downsides' => "Yes, but let's talk about the downsides",
    'notEnough' => "It's not nearly enough",
    'tooMuchPower' => "I don't want one company having all that data and power",
    'statusQuo' => "I just like things as they are",
    'somethingElse' => "Something else",
    'howIs' => "That's how it is",
    'otherUsersOk1' => ":UserOk1",
    'otherUsersOk2' => ":UserOk2",
    'endGreat' => ":UserGreat",
    'endCool' => "Cool",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

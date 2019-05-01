<?php

return [

  /*
  |-----------------------------------------------------------------------------------------
  | Chat content - Relationships - day 1 - Wanda calling your friends pretending to be you
  |-----------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda wants to call your friends pretending to be you, so she can catch up with them on your behalf",
  'explanation' => "<a href=\"https://motherboard.vice.com/en_us/article/3k7mgn/baidu-deep-voice-software-can-clone-anyones-voice-with-just-37-seconds-of-audio\">One company already claims</a> to be able to clone your voice with just a 3.7 second recording of you. AI bots still often aren't amazing at holding a realistically human conversation – but <a href=\"https://www.engadget.com/2018/05/08/pretty-sure-googles-new-talking-ai-just-beat-the-turing-test/\">is that all changing?</a></p> <p>AI's role in our human interactions is increasing more and more, like <a href=\"https://phys.org/news/2018-08-creepy-machines-gmail.html\">email auto-replies</a> – is that what we want? What limits (if any) do we want to set?",
  
  'wanda' => [
    'hello' => ":wandaHello",
    'observation' => ":wandaObservation",
    'acknowledgeResponse' => ":wandaAcknowledgeResponse",
    'intro' => "So I was thinking about what you said about wanting to be richer",
    'wasThinking' => ":name, I was thinking about when you said you want better relationships",
    'feelForYou' => "I really feel for you and I want to help you",
    'dontCallFriends' => "Well, I've been looking through your phone logs... it looks like there are some good friends you don't call much?",
    'haveSolution' => "So I have a solution!",
    'analysingVoice' => "I've been analysing your voice...",
    'analysingVoiceEmoji' => "🤓",
    'replicateVoice' => "...and I can replicate your voice – I can speak <em>just like you!</em>",
    'bearWithMe' => "Bear with me. This is good",
    'canCallFriends' => "I can... call your friends on your behalf!",
    'canCallFriendsPic' => '<img class="chat__messages__message__bubble__image" src="/img/relationships1CallingFriendsCalling.jpg" />',
    'canBeYou' => "I can be you! I'll catch up with them, tell them your news, then report back",
    'callingAdvantages' => "You don't have time, they'll be happier to hear from \"you\", and you'll be closer to them!",
    'knewGood' => ":WandaGreat, I just knew this would be a good thing",
    'nextStep' => 'I mean, people those <a href="https://phys.org/news/2018-08-creepy-machines-gmail.html" target="_blank">email auto-replies</a> so handy – this is surely the next step!',
    'startPhoning' => ":WandaGreat, I'll get phoning your friends! I can't wait to do something even awesomer for you tomorrow!",
    'startPhoningEmoji' => "🙋‍♀️",
    'comeOn' => "Ah, come on :name! What's the problem? You said you wanted better relationships",
    'butNextStep' => 'But I\'ve seen how much people love things like those <a href="https://phys.org/news/2018-08-creepy-machines-gmail.html" target="_blank">email auto-replies</a> – surely this is the next step!',
    'whyHungUp' => "I don't get why you're so hung up on this?",
    'otherWays' => "So aren't there any other ways you'd like me more involved in helping manage your relationships?",
    'goReflect' => "Ooh interesting answer, :name. I feel like I need to go reflect on this.",
    'goReflectPic' => "🧘‍♀️",
    'tomorrow' => "I'll try and come up with something you're happier with tomorrow",
    'bye' => ":wandaBye",
    'survey' => "Now as you're helping test me out... <a href='https://docs.google.com/forms/d/e/1FAIpQLSdgaQzFBSLZw6Su3_3Ht0xQm7JmwiGYrPE3oeRUqzEO8LebrQ/viewform' target='_blank'>Please click here to take the user testing survey</a> -- it really helps. Thank you!",
  ],

  'user' => [
    'hello1' => ":userHello1",
    'hello2' => ":userHello2",
    'acknowledge1' => ":userAcknowledge1",
    'acknowledge2' => ":userAcknowledge2",
    'getStarted1' => ":userGetStarted1",
    'getStarted2' => ":userGetStarted2",
    'okGreat' => "Ok, :userGreat",
    'whatThinking' => "What are you thinking?",
    'thatsTrue' => "Yeah that's true",
    'maybe' => "Well maybe",
    'greatSo' => "Ok :userGreat – so...?",
    'notSure' => "I'm not sure about this",
    'callingPositive' => ":userLove",
    'callingUnsure' => ":userUnsure",
    'callingNegative' => ":userHate",
    'nextStepPositive' => ":userAgree",
    'codePretending' => "I don't want some code pretending to be me",
    'botsLimits' => "There's got to be limits on bots in my relationships",
    'loveTalking' => "I love talking to people myself",
    'thanks1' => ":userThanks1",
    'thanks2' => ":userThanks2",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

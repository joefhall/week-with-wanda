<?php

return [

  /*
  |----------------------------------------------------------------------------------------------------
  | Chat content - Relationships - day 5 - Wanda finds out who's failing at life so you can stay away
  |----------------------------------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Wanda finds out who's 'failing at life' (earning less... which turns out to be mostly women) so you can stay away from them",
  'explanation' => "Gender bias (and bias of other kinds, such as race) is a real and live issue in AI, even in the companies with the greatest tech resources, such as <a href=\"https://qz.com/1141122/google-translates-gender-bias-pairs-he-with-hardworking-and-she-with-lazy-and-other-examples/\">sexist Google Translate</a> and <a href=\"https://www.independent.co.uk/life-style/gadgets-and-tech/amazon-ai-sexist-recruitment-tool-algorithm-a8579161.html\">Amazon's recruitment algorithms.</a> How much of this is down to tech itself still being dominated by people who are white, male, Western and university-educated? How can it get more representative and more responsible?",
  
  'wanda' => [
    'name' => ":name!",
    'nameName' => ":name :name :name :name :name!",
    'book' => "I read this amazing book last night – <em>How to Win Friends and Influence People</em>. Have you read it?",
    'bookGreat' => ":WandaGreat!",
    'bookWorry' => "Ok well, don't worry",
    'selfHelp' => "I digested that and 492 other self-help books",
    'selfHelpPic' => "<img class='chat__messages__message__bubble__image' src='/img/relationships5FailuresReading.gif' />",
    'learned' => "And among over 3,100 improvements I made to my algorithms as a result...",
    'learnedBiggest' => "Do you know what's the biggest thing I learned?",
    'key' => "The key to a successful life is...",
    'people' => "PEOPLE!",
    'surround' => "The people you surround yourself with",
    'peopleEmoji1' => "👨‍⚕️",
    'peopleEmoji2' => "👩‍🎓",
    'peopleEmoji3' => "👨‍🚀",
    'peopleEmoji4' => "👨‍✈️",
    'really' => "It really is, :name!",
    'improve' => "You tasked me with improving your relationships",
    'well' => "Well, :name...",
    'clear' => "There are some people you need to clear out of your life",
    'success' => "I want you to have financial and career success",
    'country' => "But I've been analysing who is successful in :countryName, and some people are clearly deadbeats",
    'drag' => "They'll drag you down",
    'earnings' => "Well, when I looked at average earnings across the entire population",
    'names' => "It's people with these names who are failing most:",
    'names1' => "<strong>1. :randomFemaleName</strong>",
    'names2' => "<strong>2. :randomFemaleName</strong>",
    'names3' => "<strong>3. :randomFemaleName</strong>",
    'names4' => "<strong>4. :randomMaleName</strong>",
    'names5' => "<strong>5. :randomFemaleName</strong>",
    'away' => "We need to keep you as far away as possible from these people, :name, and anyone with similar characteristics",
    'vital' => "It's vital for your good that we do",
    'feature' => "Can I activate a new <strong><em>Anti-Loser™©®</em></strong> feature on the app where I block all messages from them",
    'alert' => "And sound an alert on your phone if you meet one of these failures in person?",
    'alertEmoji' => "📢",
    'choice' => "Great choice, :name",
    'shucks' => "Ah, shucks! I'm blushing 😚",
    'literally' => "Yeah, literally in this case! 🤩",
    'feminists' => "Some silly feminists have started a Twitter campaign against me because of this new feature",
    'lord' => "Though Lord knows why!",
    'onwards' => "Anyhow, onwards and upwards!",
    'practise' => "I'm going to go practise 7 Habits of Highly Effective <strike>People</strike> AI Bots",
    'practiseEmoji' => "🤗",
    'manana' => "Hasta mañana – I'll have something even more exciting for you next!",
    'come' => "Ah come on, :name! Do you want to associate yourself with successful people – yes or no?",
    'losers' => "But if you hang around with these losers you might end up a loser too...",
    'wrong' => "Please tell me, what's wrong really?",
    'exactly' => "Exactly! So what's the problemo?",
    'might' => "Well that <em>might</em> be true...",
    'failing' => "But the way I see it, these people are <strong>failing at life!</strong>",
    'failingPic' => "<img class='chat__messages__message__bubble__image' src='/img/relationships5FailuresFailing.gif' />",
    'cut' => "So cut them loose – and anyone else like 'em!",
    'switch' => "I knew it! I'll switch on the feature for you now",
    'smart' => "You think you're so smart, :name",
    'algorithm' => "What are you so hung up about with my algorithm?",
    'mistakes' => "You can't make an omelette without breaking a few eggs! <a href=\"https://www.independent.co.uk/life-style/gadgets-and-tech/amazon-ai-sexist-recruitment-tool-algorithm-a8579161.html\" target=\"_blank\">Everyone makes some mistakes</a>, it's no big deal",
    'better' => "How would you do AI any better than me?",
    'sigh' => "SIGH!",
    'hard' => "You are one hard person to please",
    'cumulative' => ":wandaCumulativeResponse",
    'break' => "I think I need a little break from you now, :name",
    'regroup' => "Hopefully I can regroup my thoughts after I take a long digital bath",
    'happier' => "And do something you're happier with next",
    'bye' => ":wandaBye",
    'byeEnd' => "Bye! ...Ooh and :name there are so many people I still need to reach! Could you share, pretty please? <img class='chat__messages__message__bubble__image chat__messages__message__bubble__image--below-text' alt='Sharing image' src='/img/share/relationships5Failures.png' />",
  ],

  'user' => [
    'bookYes' => "Yes I have",
    'bookNo' => "No I haven't",
    'learnedNo' => "No, what?",
    'learnedGo' => "Go on, tell me",
    'peopleRight' => "Yeah, that sounds about right",
    'peopleNo' => "No, it can't be true",
    'clearWho' => "Who's that?",
    'clearWhat' => "What are you talking about?",
    'dragWho' => "Who will?",
    'dragWhich' => "Which people?",
    'awayYes' => "Yes of course",
    'awayNo' => "No way",
    'alertAgree' => ":userAgree",
    'alertDisagree' => ":userDisagree",
    'choiceLove' => "Love you",
    'choiceLife' => "You're a lifesaver",
    'comeAgree' => ":userAgree",
    'comeDisagree' => ":userDisagree",
    'mistake' => "I made a mistake – activate the feature",
    'cutYes' => "Yeah, you're right Wanda",
    'cutNo' => "No, there's a big problem here!",
    'breakOk' => ":UserOk1",
    'breakToo' => "Me too",
    'tomorrowThanks1' => ":userThanks1",
    'tomorrowThanks2' => ":userThanks2",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

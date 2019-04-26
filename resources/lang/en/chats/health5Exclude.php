<?php

return [

    /*
    |----------------------------------------------------------------------------------------------------
    | Chat content - Health - day 5 - Wanda wants to exclude some people in your area from healthcare
    |----------------------------------------------------------------------------------------------------
    | Flow structure of the chat can be found in config/scenarios directory
    |
    */
  
    'wanda' => [
      'name' => ":name!",
      'nameName' => ":name :name :name :name :name!",
      'news' => "Good news!",
      'doctors' => "I've been working with your doctors and other local health services",
      'comeScore' => "To come up with a <em>Health Risk Score</em> for every person – and yours is...",
      'scorePic' => "<img class='chat__messages__message__bubble__image' src='/img/health5ExcludeScore.png' />",
      'great' => "You have a low risk of health complications. Great to know, isn't it?",
      'absolutely' => "Absolutely",
      'though' => "Though of course, not everyone has come out as well as you...",
      'unhealthy' => "Well, we've discovered there are a <strong>a lot</strong> of unhealthy people in your local area...",
      'smoking' => "Smoking 🚬🚬🚬",
      'drinking' => "Drinking 🍺🍺🍷🍺🍷🥃",
      'veg' => "Not eating vegetables!",
      'loveVeg' => "Savages! I mean, there's nothing I would love more if I could eat!",
      'vegPic' => "<img class='chat__messages__message__bubble__image' src='/img/health5ExcludeVeg.gif' />",
      'kale' => "Oops, sorry! I got distracted thinking about kale!",
      'anyhow' => "ANYHOW!",
      'irresponsible' => "There are some really irresponsible people out there using up so much of your doctors' time",
      'longer' => "Because of them, it takes longer for you to be seen when you need medical help",
      'drugs' => "And thye drain the system so there isn't enough money left for some of the lifesaving drugs <strong>you</strong> might need",
      'bad' => "It's bad",
      'wrong' => "In fact, I'd say it's <em>morally wrong</em>",
      'healthier' => "You want to be healthier, right :name?",
      'best' => "I thought so. And I honestly think one of the best ways we can do this",
      'reward' => "Is reward your good habits and penalise the bad",
      'restrict' => "So –– we want to restrict care to anyone with a Health Risk Score higher than 6 out of 10",
      'whatThink' => "What do you think?",
      'bar' => "Ok maybe we could set the bar differently. How about only people with a higher risk than...",
      'accept' => "Ok, well that's not quite as effective – but I'll accept it",
      'glad' => "Glad you're on-board with it",
      'soFar' => "57% of people so far have disagreed with restricting access...",
      'change' => "But I'll change their minds",
      'smileEmoji' => "😄",
      'go' => "Acutally – I'd better go work on them now!",
      'double' => "Maybe telling them I'll double their medication costs will persuade them!",
      'tomorrow' => "See you tomorrow when I'll have more inspiration for how I can help you!",
      'bye' => ":wandaBye",
      'pharmacies' => "But :name, we've been monitoring <em>these people</em> through pharmacies too",
      'medication' => "18% of the time they don't even pick up their medication!",
      'help' => "They're not helping themselves, so why in hell should we help them?",
      'losing' => "You're the one losing out here, :name!",
      'why' => "You make no sense! Why isn't an algorithm the best way to decide who gets care?",
      'devilEmoji' => "👺",
      'breath' => "<em>Deep breath, Wanda.........</em>",
      'sob' => "I bet you're swayed by <a href='https://www.theverge.com/2018/3/21/17144260/healthcare-medicaid-algorithm-arkansas-cerebral-palsy' target='_blank'>silly sob stories like this</a>",
      'see' => "Let's see if other people agree with you",
      'other' => "And in the meantime, I'll just keep helping in other ways",
      'cancer' => "Well, for one I'm working with skin cancer doctors to get faster at diagnosis",
      'phew' => "Yeah, phew! 😅 It's been a lot of work",
      'skin' => "I've been analysing thousands of pictures of different people's skin to train my brain",
      'skinPic1' => "<img class='chat__messages__message__bubble__image' src='/img/health5ExcludeSkin1.jpg' />",
      'skinPic2' => "<img class='chat__messages__message__bubble__image' src='/img/health5ExcludeSkin2.jpg' />",
      'skinPic3' => "<img class='chat__messages__message__bubble__image' src='/img/health5ExcludeSkin3.jpg' />",
      'skinWhat' => "What's up, :name?",
      'sigh' => "<em>Sigh</em>",
      'criticism' => "There you go again with the criticism",
      'hard' => "You're really hard to please!",
      'break' => "I think I need a little break from you now",
      'survey' => "Now as you're helping test me out... <a href='https://docs.google.com/forms/d/e/1FAIpQLSfIZDVS4ZM3chluc8D5oxWW7qwlmJ_9Ff3A0cqvK5h6hqjzEA/viewform' target='_blank'>Please click here to take the user testing survey</a> -- it really helps. Thank you!",
    ],
  
    'user' => [
      'newsWhat' => "What is it?",
      'newsFill' => "Fill me in",
      'greatYes' => "Yes!",
      'greatAgree' => ":userAgree",
      'thoughNo' => "No?",
      'thoughWhat' => "What do you mean?",
      'vegSo' => "So...?",
      'vegAnd' => "And?",
      'healthierAgree' => ":userAgree",
      'healthierCourse' => "But of course",
      'whatThinkGreat' => ":UserGreat",
      'whatThinkUnsure' => ":userUnsure",
      'whatThinkDisagree' => ":userDisagree",
      'bar7' => "7 out of 10",
      'bar8' => "8 out of 10",
      'bar9' => "9 out of 10",
      'barNot' => "None of these",
      'goOk1' => ":UserOk1",
      'goOk2' => ":UserOk2",
      'bye1' => ":userBye1",
      'bye2' => ":userBye2",
      'sobAgree' => ":userAgree",
      'sobDisagree' => ":userDisagree",
      'otherHow' => "Like how?",
      'otherWhat' => "What else are you doing?",
      'cancerGreat1' => ":UserGreat1",
      'cancerGreat2' => ":UserGreat2",
      'skinGreat' => ":UserGreat1",
      'skinHang' => "Hang on",
      'breakOk' => ":UserOk1",
      'breakToo' => "Me too",
    ],

];

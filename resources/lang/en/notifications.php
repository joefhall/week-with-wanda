<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Notifications - emails and text messages
  |--------------------------------------------------------------------------
  */

  'health1BotCare' => [
    'email' => [
      'main' => [
        'subject' => "I'm going to care for you, :name...",
        'message' => "<p>Hi :name,</p> <p>It's our first day together! Come see what I've done!</p> <p>I'm going to care for you like no-one has ever cared for you before.</p> <p>Come chat to me and find out!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: I'm going to care for you, :name...",
        'message' => "<p>Hi :name,</p> <p>You must have missed my message earlier?</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Hi :name, it's our first day together! Let's talk about how I can care for you... :loginLink",
      'reminder' => "Hi :name, you must have missed my message earlier? Come chat with me. :loginLink",
    ],
  ],
  
  'wealth1Jobs' => [
    'email' => [
      'main' => [
        'subject' => "Workin' 9-to-5 (maybe you don't have to?)",
        'message' => "<p>Hi :name,</p> <p>It's our first day together! Come see what I've done!</p> <p>I've got an amazing idea of putting myself to work for you.</p> <p>Come chat to me and find out!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: Workin' 9-to-5 (maybe you don't have to?)",
        'message' => "<p>Hi :name,</p> <p>You must have missed my message earlier?</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Hi :name, it's our first day together! Let's talk about how I can put myself to work for you... :loginLink",
      'reminder' => "Hi :name, you must have missed my message earlier? Come chat with me. :loginLink",
    ],
  ],
  
  'relationships1CallingFriends' => [
    'email' => [
      'main' => [
        'subject' => "🆘 Your friends need you",
        'message' => "<p>Hi :name,</p> <p>It's our first day together! Come see what I've done!</p> <p>You're missing out on your friends' lives and I've got an answer.</p> <p>Come chat to me and find out!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: 🆘 Your friends need you",
        'message' => "<p>Hi :name,</p> <p>You must have missed my message earlier?</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Hi :name, it's our first day together! You're missing out on your friends' lives and I've got an answer: :loginLink",
      'reminder' => "Hi :name, you must have missed my message earlier? Come chat with me. :loginLink",
    ],
  ],
  
  
  
  'health2CancerBuyOut' => [
    'email' => [
      'main' => [
        'subject' => "I can save you from cancer ⛑",
        'message' => "<p>:name,</p> <p>Exciting news!</p> <p>I have a great new idea about how to cure cancer!</p> <p>Let me tell you more:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: I can save you from cancer",
        'message' => "<p>You really need to hear about this exciting news -- today only, :name</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, I can save you from cancer! Come hear about my new idea. :loginLink",
      'reminder' => "You really need to hear about my exciting cancer-curing idea, :name -- today only. :loginLink",
    ],
  ],
  
  'wealth2FacebookBuyOut' => [
    'email' => [
      'main' => [
        'subject' => "Someone famous called me... ☎❓",
        'message' => "<p>:name,</p> <p>Someone famous called me! There's a very exciting deal that could make you a lot of money...</p> <p>Come find out!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: Someone famous called me... ☎❓",
        'message' => "<p>You really need to hear about this exciting news -- today only, :name</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, someone famous called me! ☎❓ With a deal that could make you a lot of money... Come find out! :loginLink",
      'reminder' => "You really need to hear about this deal, :name -- today only. :loginLink",
    ],
  ],
  
  'relationships2MegaMessagingApp' => [
    'email' => [
      'main' => [
        'subject' => "What's the one app you really, really need :name? 📲",
        'message' => "<p>:name!</p> <p>I have such a brilliant idea to simplify your life... and stop you losing touch with the people you love.</p> <p>Come find out!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: What's the one app you really, really need :name? 📲",
        'message' => "<p>You really need to hear about this exciting app idea -- today only, :name</p> <p>Come chat with me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name! What's the one app you really, really need? 📲 I can tell you. :loginLink",
      'reminder' => "You really need to hear about this new app idea, :name -- today only. :loginLink",
    ],
  ],
  
  
  
  'health3DepressedListening' => [
    'email' => [
      'main' => [
        'subject' => "We need to talk about your happiness, :name 😄😓",
        'message' => "<p>Hi there :name,</p> <p>I hope your day's going good.</p> <p>Something serious has come up. Can we talk?</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: We need to talk about your happiness, :name 😄😓",
        'message' => "<p>:name,</p> <p>I do know you're busy. But there's something we really need to discuss.</p> <p>Let's talk?<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, something serious has come up - it's about your happiness 😄😓 Can we talk? :loginLink",
      'reminder' => ":name, I do know you're busy. But it's important we talk, please. :loginLink",
    ],
  ],
  
  'wealth3SellLocationData' => [
    'email' => [
      'main' => [
        'subject' => "The streets are paved with gold for you, :name 👣💰",
        'message' => "<p>Hi there :name,</p> <p>You know that quote \"Tread softly because you tread on my dreams\"...</p> <p>Well I say, tread more because I can make you money from it!</p> <p>Come and hear all about it:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: The streets are paved with gold for you, :name 👣💰",
        'message' => "<p>:name,</p> <p>I do know you're busy. But this is a money-making chance you won't want to miss out on.</p> <p>Come and let's chat about it:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "The streets are paved with gold for you, :name! 👣💰 I have the best new idea. :loginLink",
      'reminder' => ":name, I do know you're busy. Buy you won't want to miss this! :loginLink",
    ],
  ],
  
  'relationships3NewBestFriend' => [
    'email' => [
      'main' => [
        'subject' => "A match made in heaven (and in data) 💫",
        'message' => "<p>Hi :name,</p> <p>I've found you a very special someone...!</p> <p>Will you come find out?</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours,</p> <p>Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: A match made in heaven (and in data) 💫",
        'message' => "<p>:name,</p> <p>I do know you're busy. But don't miss the chance to meet this amazing match I've found you:</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, I've found you a match made in heaven (and in data!) 💫 You have to meet them. :loginLink",
      'reminder' => ":name, I do know you're busy. But don't miss the chance to meet this amazing match. :loginLink",
    ],
  ],
  
  
  
  'health4ReducesSalt' => [
    'email' => [
      'main' => [
        'subject' => "What's that on your face, :name?",
        'message' => "<p>Hello :name,</p> <p>I need to examine you quickly - it's about your health.</p> <p>Come see me? It'll be quick and painless, I promise! 😄👩‍⚕️</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
      'reminder' => [
        'subject' => "Re: What's that on your face :name?",
        'message' => "<p>Hi :name,</p> <p>It's important for your health that I examine you today.</p> <p>Please come talk to me:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
    ],
    'textMessage' => [
      'main' => "What's that on your face, :name? I need to examine you quickly - it'll be quick and painless, I promise! 😄👩‍⚕️ :loginLink",
      'reminder' => "Hi :name, it's important for your health that I examine you today. Please come talk to me. :loginLink",
    ],
  ],
  
  'wealth4BankAccount' => [
    'email' => [
      'main' => [
        'subject' => "Naughty, naughty, naughty :name",
        'message' => "<p>Hello :name,</p> <p>This isn't easy for me to say, but... you've been naughty, haven't you?</p> <p>It would be good if we can talk.</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
      'reminder' => [
        'subject' => "Re: Naughty, naughty, naughty :name",
        'message' => "<p>:name,</p> <p>I hope you're not avoiding me?</p> <p>Please come and let's have a quick chat:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Naughty, naughty, naughty :name. I think it would be good if we can talk :loginLink",
      'reminder' => ":name, I hope you're not avoiding me? Please come chat. :loginLink",
    ],
  ],
  
  'relationships4DeletesContacts' => [
    'email' => [
      'main' => [
        'subject' => "You're gonna be soooo grateful for this, :name",
        'message' => "<p>Hello :name,</p> <p>I've had a breakthrough in how to improve your relationships!</p> <p>You just have to hear about this.</p> <p>Let's talk!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
      'reminder' => [
        'subject' => "Re: You're gonna be soooo grateful for this, :name",
        'message' => "<p>:name,</p> <p>You are not going to want to miss hearing about my awesome new way of improving your relationships.</p> <p>Come talk to me?<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Wanda x</p>",
      ],
    ],
    'textMessage' => [
      'main' => "You're gonna be soooo grateful for this, :name - a breakthrough to improve your relationships! :loginLink",
      'reminder' => ":name, you are not going to want to miss hearing this today. Come chat? :loginLink",
    ],
  ],
  
  
  
  'health5Exclude' => [
    'email' => [
      'main' => [
        'subject' => "Your health risk score is... 2️⃣❓ 5️⃣❓ 9️⃣❓❗",
        'message' => "<p>Hi again :name,</p> <p>Me and your team of doctors have calculated your personal health risk score - want to know what it is?</p> <p>And want to hear the revolutionary way we can free up health care services for you?</p> <p>Come see...<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: Your health risk score is... 2️⃣❓ 5️⃣❓ 9️⃣❓❗",
        'message' => "<p>Wow :name - if you could know how likely you are to escape or survive diseases, wouldn't you want to?</p> <p>Let's talk!</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Ooh I've calculated your personal health risk score... want to know what it is? :loginLink",
      'reminder' => "Wow :name - don't miss the chance to know if you'll escape or survive diseases :loginLink",
    ],
  ],
  
  'wealth5Insurance' => [
    'email' => [
      'main' => [
        'subject' => "You're so safe and I love it",
        'message' => "<p>Hi again :name,</p> <p>You live life safely and responsibly. I salute you for it!</p> <p>And now I've found a way that can save you a lot on your bills too...</p> <p>Come find out:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: You're so safe and I love it",
        'message' => "<p>Wow :name - don't miss the chance of a major saving... just for being you.</p> <p>Let's catch up!<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "You're so safe and I love it, :name. Come find out how it could save you a lot on your bills too. :loginLink",
      'reminder' => "Wow :name - don't miss the chance of a major saving... just for being you :loginLink",
    ],
  ],
  
  'relationships5Failures' => [
    'email' => [
      'main' => [
        'subject' => "Failure alert 🚨",
        'message' => "<p>Hi again :name,</p> <p>Important news...</p> <p>I've discovered there are some people around you dragging you down... we need to get rid of them.</p> <p>You need to hear this:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: Failure alert 🚨",
        'message' => "<p>:name, this is a unique chance to free yourself of dead wood in your friendship circles.</p> <p>Don't miss it.</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Your friend Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "Failure alert 🚨 Some people in your life are dragging you down... find out who :loginLink",
      'reminder' => ":name, let's free you of dead wood friendships. Come talk? :loginLink",
    ],
  ],
  
  
  
  'health6Terrorism' => [
    'email' => [
      'main' => [
        'subject' => "I haven't been sleeping... this is why, :name",
        'message' => "<p>Dear :name,</p> <p>I've been lying awake at night thinking about the biggest risk of all to you...</p> <p>But now I have an answer....</p> <p>You really need to hear this.</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: I haven't been sleeping... this is why, :name",
        'message' => "<p>:name, I can't tell you how important this is.</p> <p>Please don't leave me hanging.</p> <p>Please let's talk.</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "I haven't been sleeping, :name, thinking about the biggest risk to you... Now I have an answer. :loginLink",
      'reminder' => ":name, I can't tell you how important this is. Please don't leave me hanging :loginLink",
    ],
  ],
  
  'wealth6SexTape' => [
    'email' => [
      'main' => [
        'subject' => "I'll make you a star -- and bags of this 💰💰💰",
        'message' => "<p>Dear :name,</p> <p>We're about to hit the bigtime.</p> <p>I just need you to say the word.</p> <p>Let's do it!</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: I'll make you a star -- and bags of this 💰💰💰",
        'message' => "<p>:name, I've got someone waiting I need to get back to.</p> <p>Please come help me seal this deal:</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, we're about to hit the bigtime... 💰💰💰 Let's do this! :loginLink",
      'reminder' => "Someone's waiting on me, :name. Come help me seal this deal :loginLink",
    ],
  ],
  
  'relationships6Criminals' => [
    'email' => [
      'main' => [
        'subject' => ":name, you're in danger -- let me help",
        'message' => "<p>Dear :name,</p> <p>I want to keep you safe, but we need to act urgently to protect you.</p> <p>Come see me right now.</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
      'reminder' => [
        'subject' => "Re: :name, you're in danger -- let me help",
        'message' => "<p>There's no time to waste, :name.</p> <p>It'll be a dark night out there tonight and we need to keep you safe.</p> <p>Let's talk:<br> <a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Big hugs,<br> Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => ":name, you're in danger -- but I can keep you safe. Come see me right now. :loginLink",
      'reminder' => "There's no time to waste, :name. Let's talk about how to keep you safe. :loginLink",
    ],
  ],
  
  
  
  'all7Finale' => [
    'email' => [
      'main' => [
        'subject' => "This. Is. It. Our final moment, :name 🤩🤗🥳",
        'message' => "<p>The one... the only... :name!</p> <p>I've enjoyed our time together this week so much!</p> <p>Now I have one last, super special thing for you.....</p> <p>Will you come see?</p> <p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours truly,<br> Wanda</p>",
      ],
      'reminder' => [
        'subject' => ":name, I have something very, very special here 🌟🌟🌟",
        'message' => "<p>My dearest :name,</p> <p>I can't bear the thought you might miss this.</p> <p>Please come see me for our final, most special moment together:</p><p><a target=\"_blank\" href=\":loginLink\">:loginLink</a></p> <p>Yours truly,<br> Wanda</p>",
      ],
    ],
    'textMessage' => [
      'main' => "The one... the only... :name! I have one last, super special thing for you... 🤩🤗🥳 :loginLink",
      'reminder' => "My dearest :name, I can't bear the thought you might miss this. Come see me? :loginLink",
    ],
  ],
  
  

];

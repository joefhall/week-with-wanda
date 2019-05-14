<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Chat content - Post-signup email / text message confirmation
  |--------------------------------------------------------------------------
  | Flow structure of the chat can be found in config/scenarios directory
  |
  */
  
  'description' => "Post-signup email / text message confirmation",

  'wanda' => [
    'checkEmail' => "Now as we've only just met :name, I just need to double-check that's your email address. I've sent you an email to :email - can you copy the code from there and paste it below please?",
    'checkEmailAgain' => "Ah unfortunately that code didn't work - can you do that again? Or I can send you a new email",
    'checkEmailResend' => "Ok I've sent you another email to :email (you might need to wait a minute or check your spam folder) - can you copy the code from there please and paste it below?",
    'checkEmailChange' => "Alrighty, I've sent a new email to that address - can you grab the code from that message and paste it in below?",
    'whatsYourNewEmail' => "What do you want to change your email to?",
    'contactPreferences' => "Ok fab. So, I need to be in touch with you over the coming week. How would you like me to do that?",
    'whatsMobileNumber' => 'Cool, and what\'s your country and mobile number :name? <span id="country-code" data-country=":country"></span>',
    'whatsYourNewMobileNumber' => 'What do you want to change your number to? <span id="country-code" data-country=":country"></span>',
    'checkMobileNumber' => "Lovely, now just to confirm that's your number I've texted you a code - can you type that in please?",
    'checkMobileNumberAgain' => "Hmm sorry that code didn't work. Can you enter it again? Or I can text you a new code",
    'checkMobileNumberResend' => "Ok I've sent another text to :mobileNumber - can you tell me the code in that text please? (Sometimes it takes a minute or two to arrive)",
    'checkMobileNumberChange' => "Alright then, I've sent a text to that number - can you tell me the code in that message?",
    'checkMobileNumberNotWorking' => "Ah, sorry about that. The mobile networks can be unreliable in some places. (Don't worry, I'll be running them all one day!)",
    'checkMobileNumberNotWorkingAllDone' => "Otherwise, great – that's it for now! I'll be in touch tomorrow and we can start our week together!",
    'allDone' => "Great, that's it for now! I'll be in touch tomorrow and we can start our week together!",
    'hopeSeeYou' => "I hope to see you every day... but even if you miss me one day, do come back! Things get more and more exciting near the end of our week!",
    'end' => ":wandaBye",
  ],

  'user' => [
    'doneEmail' => "I've done that now",
    'resendEmail' => "Resend the email",
    'changeEmail' => "Change my email address",
    'contactEmailOnly' => "Email only",
    'contactBoth' => "Email and text message (it's the best!)",
    'doneMobileNumber' => "",
    'resendMobileNumber' => "Resend the text",
    'changeMobileNumber' => "Change mobile number",
    'notWorkingMobileNumber' => "Text message didn't come - let's skip this",
    'bye1' => ":userBye1",
    'bye2' => ":userBye2",
  ],

];

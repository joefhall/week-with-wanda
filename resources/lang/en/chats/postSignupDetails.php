<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Welcome and signup stage - chat content
    |--------------------------------------------------------------------------
    |
    |
    */
  
    'wanda' => [
      'checkEmail' => "Now as we've only just met :name, I just need to double-check that's your email address. I've sent you a link at :email - can you click on it please?",
      'checkEmailAgain' => "Hmm sorry I don't have a record of you clicking the link in your email - can you do that again? Or I can send you a new email",
      'checkEmailResend' => "Ok I've sent you another email to :email - can you click on the link in there please?",
      'contactPreferences' => "Ok fab. So, I need to be in touch with you over the coming week. How would you like me to do that?",
      'whatsMobileNumber' => 'Cool, and what\'s your mobile number :name? <span id="country-code" data-country=":country"></span>',
      'checkMobileNumber' => "Lovely, now just to confirm that's your number I've texted you a code - can you type that in please?",
      'checkMobileNumberAgain' => "Hmm sorry that code didn't work. Can you enter it again? Or I can text you a new code",
      'checkMobileNumberResend' => "Ok I've sent another text to :mobileNumber - can you tell me the code in that text please?",
      'allDone' => "Great, that's it for now! I'll be in touch tomorrow and we can start our week together!",
    ],
  
    'user' => [
      'doneEmail' => "I've done that now",
      'resendEmail' => "Please can you resend that email?",
      'contactEmailOnly' => "Email only",
      'contactTextMessageOnly' => "Text message only",
      'contactBoth' => "Both (it's the best!)",
      'doneMobileNumber' => "",
      'resendMobileNumber' => "Please can you send the text again?",
    ],

];

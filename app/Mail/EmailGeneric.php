<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailGeneric extends Mailable
{
  use Queueable, SerializesModels;
  
  /**
   * The subject line.
   *
   * @var string
   */
  public $subject;
  
  /**
   * The message text.
   *
   * @var string
   */
  public $messageText;

  /**
   * Create a new message instance.
   *
   * @param string $subject
   * @param string $messageText
   * @return void
   */
  public function __construct(string $subject, string $messageText)
  {
    $this->subject = $subject;
    $this->messageText = $messageText;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this
      ->subject($this->subject)
      ->view('mail.generic');
  }
}

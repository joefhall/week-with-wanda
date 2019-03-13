<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * The user's first name.
   *
   * @var string
   */
  public $name;
  
  /**
   * The verification token id.
   *
   * @var string
   */
  public $verificationTokenId;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(string $name, string $verificationTokenId)
  {
    $this->name = $name;
    $this->verificationTokenId = $verificationTokenId;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this
      ->subject(__('mail.verification.subject', ['name' => $this->name, 'verificationTokenId' => $this->verificationTokenId]))
      ->view('mail.verification');
  }
}

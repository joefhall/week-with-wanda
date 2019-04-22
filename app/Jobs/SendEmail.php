<?php

namespace App\Jobs;

use App\Mail\EmailGeneric;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * User id.
   *
   * @param int
   */
  protected $userId;
  
  /**
   * The subject line.
   *
   * @var string
   */
  protected $subject;

  /**
   * The email message to send.
   *
   * @var string
   */
  protected $messageText;
  
  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @param string $subject
   * @param string $messageText
   * @return void
   */
  public function __construct(int $userId, string $subject, string $messageText)
  {
    $this->userId = $userId;
    $this->subject = $subject;
    $this->messageText = $messageText;
  }

  /**
   * Execute the job.
   *
   * @param UserRepository $userRepository
   * @return void
   */
  public function handle(UserRepository $userRepository)
  {
    Log::info('Sending email for user id (' . $this->userId . '), subject (' . $this->subject . ')');
    
    $user = User::find($this->userId);
    
    if ($user->email && $user->send_emails) {
      Mail::to($user->email)->send(new EmailGeneric($this->subject, $this->messageText));
    }
  }
}

<?php

namespace App\Jobs;

use App\Repositories\UserRepository;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SendVerificationTextMessage implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * User id.
   *
   * @param int
   */
  protected $userId;

  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @return void
   */
  public function __construct(int $userId)
  {
    $this->userId = $userId;
  }

  /**
   * Execute the job.
   *
   * @param UserRepository $userRepository
   * @return void
   */
  public function handle(UserRepository $userRepository)
  {
    Log::info('Sending verification text message for user id ' . $this->userId);
    
    $user = User::find($this->userId);
    $token = $userRepository->addVerificationToken($this->userId, 'mobile_number');
    
    SendTextMessage::dispatch($this->userId, __('texts.verification', ['name' => $user->first_name]) . $token->uuid);
  }
}

<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SetCurrentDayScenario implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * User id.
   *
   * @param int
   */
  protected $userId;
  
  /**
   * The day in the user's 7 day experience (welcome/signup is day 0).
   *
   * @var int
   */
  protected $day;
  
  /**
   * The scenario id.
   *
   * @var string
   */
  protected $scenarioId;
  
  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @param int $day
   * @param string $scenarioId
   * @return void
   */
  public function __construct(int $userId, int $day, string $scenarioId)
  {
    $this->userId = $userId;
    $this->day = $day;
    $this->scenarioId = $scenarioId;
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    Log::info("Setting current day and scenario for user ({$this->userId}), day ({$this->day}), scenario ({$this->scenarioId})");
    
    $user = User::find($this->userId);
    $user->current_day = $this->day;
    $user->current_scenario = $this->scenarioId;
    $user->save();
  }
}

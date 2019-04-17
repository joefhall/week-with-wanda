<?php

namespace App\Jobs;

use App\Jobs\SendVerificationEmail;
use App\Jobs\SendVerificationTextMessage;
use App\Repositories\UserRepository;
use App\Scenario;
use App\User;
use App\Utilities\GetsScenariosByDay;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ScheduleWeek implements ShouldQueue
{
  use Dispatchable, GetsScenariosByDay, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * The id of the user we are scheduling the week's scenarios, emails and/or text messages for.
   *
   * @var int
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
    $this->user = User::find($this->userId);
    $this->categories = ['health', 'wealth', 'relationships'];
    
    Log::info("Scheduling week for user({$this->userId})");
    
    $userScenarios = $this->pickUserScenarios();
    
    $this->user->scenarios()->sync($userScenarios);
  }
  
  /**
   * Execute the job.
   *
   * @return array
   */
  public function pickUserScenarios()
  {
    $categoryScenariosByDay = $this->getCategoryScenariosByDay();
    $userCategories = [];
    $userScenarios = [];
    
    foreach ($this->categories as $category) {
      if ($this->user["better_{$category}"]) {
        $userCategories[] = $category;
      }
    }
    
    foreach($categoryScenariosByDay as $dayNumber => $day) {
      $categoryToday = array_random($userCategories);
      $userScenarios[$dayNumber] = $day[$categoryToday];
    }
    
    return $userScenarios;
  }
}

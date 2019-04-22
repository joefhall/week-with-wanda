<?php

namespace App\Jobs;

use App\Jobs\SendNotification;
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
    
    Log::info("Scheduling week for user({$this->userId})");
    
    $userScenarios = $this->pickUserScenarios();
    $this->user->scenarios()->sync($userScenarios);
    
    $this->scheduleNotifications($userScenarios);
  }
  
  /**
   * Schedule the notifications (emails and/or text messages) for the week.
   *
   * @param array $userScenarios
   * @return void
   */
  public function scheduleNotifications(array $userScenarios)
  {
    foreach ($userScenarios as $day => $scenarioId) {      
      SendNotification::dispatch($this->userId, $scenarioId, 'main')
        ->delay(Carbon::today($this->user->timezone)->addDays($day)->addHours(rand(8,12))->addMinutes(rand(1,59)));
      
      SendNotification::dispatch($this->userId, $scenarioId, 'reminder')
        ->delay(Carbon::today($this->user->timezone)->addDays($day)->addHours(rand(17,20))->addMinutes(rand(1,59)));
    }
  }
  
  /**
   * Pick the list of scenarios the user will encounter day by day, based on their preferences.
   *
   * @return array
   */
  public function pickUserScenarios()
  {
    $categoryScenariosByDay = $this->getCategoryScenariosByDay();
    $userCategories = [];
    $userScenarios = [];
    
    foreach (['health', 'wealth', 'relationships'] as $category) {
      if ($this->user["better_{$category}"]) {
        $userCategories[] = $category;
      }
    }
    
    foreach($categoryScenariosByDay as $dayNumber => $day) {
      $categoryToday = array_random($userCategories);
      $userScenarios[$dayNumber] = $day[$categoryToday];
    }
    
    $userScenarios[7] = 'all7Finale';
    
    return $userScenarios;
  }
}

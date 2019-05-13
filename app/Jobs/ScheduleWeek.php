<?php

namespace App\Jobs;

use App\Jobs\FinishWeek;
use App\Jobs\SendNotifications;
use App\Jobs\SetCurrentDayScenario;
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
   * @return void
   */
  public function handle()
  {
    $this->user = User::find($this->userId);
    
    if ($this->user) {
      Log::info("Scheduling the week for user({$this->userId})");

      $userScenarios = $this->pickUserScenarios();
      $this->user->scenarios()->sync($userScenarios);

      $this->scheduleJobs($userScenarios);
    }
  }
  
  /**
   * Schedule the setting of days and scenarios,
   * and notifications (emails and/or text messages) for the week.
   *
   * @param array $userScenarios
   * @return void
   */
  public function scheduleJobs(array $userScenarios)
  { 
    foreach ($userScenarios as $day => $scenarioId) {
      Log::info("Scheduling jobs for day($day), scenario ($scenarioId)");
      
      $mainTime = [
        'hours' => rand(8,12),
        'minutes' => rand(1,59),
      ];
      $reminderTime = [
        'hours' => rand(17,20),
        'minutes' => rand(1,59),
      ];
      
      SetCurrentDayScenario::withChain([
        new SendNotifications($this->userId, $scenarioId, 'main')
      ])
        ->dispatch($this->userId, $day, $scenarioId)
        ->delay(Carbon::today($this->user->timezone)->addDays($day)->addHours($mainTime['hours'])->addMinutes($mainTime['minutes']));
      
      SendNotifications::dispatch($this->userId, $scenarioId, 'reminder')
        ->delay(Carbon::today($this->user->timezone)->addDays($day)->addHours($reminderTime['hours'])->addMinutes($reminderTime['minutes']));
    }
    
    FinishWeek::dispatch($this->userId)
        ->delay(Carbon::today($this->user->timezone)->addDays(10)->addHours(rand(8,12))->addMinutes(rand(1, 59)));
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

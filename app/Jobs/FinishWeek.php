<?php

namespace App\Jobs;

use App\Jobs\SendEmail;
use App\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class FinishWeek implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * The id of the user.
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
    
    Log::info("Finishing week for user({$this->userId})");
    
    $scenariosStarted = $this->getScenariosStarted();
    $scenariosText = $this->getScenariosText($scenariosStarted);
    $name = $this->user->first_name;
    
    $emailSubject = __('mail.finalDay.subject', compact('name'));
    $emailText = __('mail.finalDay.text.intro', compact('name')) . $scenariosText . __('mail.finalDay.text.ending', compact('name'));
    
    SendEmail::dispatch($this->userId, $emailSubject, $emailText)
      ->delay(Carbon::now()->addHours(3));
              
    // TODO: also delete user's data
  }
  
  /**
   * Get the scenarios the user has started.
   *
   * @return array
   */
  public function getScenariosStarted()
  {
    return $this->user->scenarios()
                      ->wherePivot('started', '!=', null)
                      ->get(['scenarios.id AS scenario_id'])
                      ->pluck('scenario_id')
                      ->toArray();
  }
  
  /**
   * Get the email text for each of an array of scenario IDs.
   *
   * @param array $scenarios
   * @return string
   */
  public function getScenariosText(array $scenarios)
  {
    $emailText = '';
    
    foreach ($scenarios as $scenario) {
      $aiView = $this->getAiViewFromScenario($scenario);
      $day = $aiView['day'] ? $aiView['day'] : '7';
      
      $emailText .= "<p><strong>Day $day: " . __("chats/$scenario.description") . '</strong></p>';
      $emailText .= '<p>' . __("chats/$scenario.explanation") . '</p>';
    }
    
    return $emailText;
  }
  
  /**
   * Get the email text for each of an array of scenarios.
   *
   * @param string $scenarioId
   * @return array|null
   */
  public function getAiViewFromScenario(string $scenarioId)
  {
    foreach (config('scenarios.aiViews') as $aiView) {
      if (array_has($aiView['scenarios'], $scenarioId)) {
        return $aiView;
      }
    }
    
    return null;
  }
}

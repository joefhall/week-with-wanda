<?php

namespace App\Jobs;

use App\Jobs\DeleteUser;
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
    
    if ($this->user) {
      Log::info("Finishing week for user({$this->userId})");
      
      $name = $this->user->first_name;
      $emailSubject = __('mail.finalDay.subject', compact('name'));
    
      $scenariosStarted = $this->getScenariosStarted();
      
      if ($scenariosStarted) {
        $scenariosText = $this->getScenariosText($scenariosStarted);
        $emailText = __('mail.finalDay.text.intro', compact('name')) . $scenariosText . __('mail.finalDay.text.ending', compact('name'));
      } else {
        $emailText = __('mail.finalDay.text.noScenarios', compact('name'));
      }
      
      SendEmail::withChain([new DeleteUser($this->userId)])
        ->dispatch($this->userId, $emailSubject, $emailText)
        ->delay(Carbon::now()->addHours(3));
    }
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

<?php

namespace App\Jobs;

use App\Jobs\SendEmail;
use App\Jobs\SendTextMessage;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

/**
 * Sends an email and/or a text message to the user for the latest scenario.
 */
class SendNotifications implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * The id of the user we are sending the message to.
   *
   * @var int
   */
  protected $userId;
  
  /**
   * The id of the scenario.
   *
   * @var string
   */
  protected $scenarioId;
  
  /**
   * The type of notification - 'main' or 'reminder'.
   *
   * @var string
   */
  protected $notificationType;
  
  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @param string $scenarioId
   * @param string $notificationType
   * @return void
   */
  public function __construct(int $userId, string $scenarioId, string $notificationType)
  {
    $this->userId = $userId;
    $this->scenarioId = $scenarioId;
    $this->notificationType = $notificationType;
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    $user = User::find($this->userId);
    $name = $user->first_name;
    $loginLink = route($user->facebook_id ? 'facebookLogin' : 'login');
    
    Log::info("Sending notifications to user({$this->userId}), for scenario($this->scenarioId), notification type({$this->notificationType})");
    
    $scenariosNotStarted = $user->scenarios()
                                ->wherePivot('started', '=', null)
                                ->orWherePivot('started', '=', false)
                                ->get(['scenarios.id AS scenario_id']);
    
    $scenarioId = $this->scenarioId;

    $thisScenarioNotStarted = $scenariosNotStarted->filter(function ($scenario, $key) use ($scenarioId) {
      return $scenario->scenario_id === $scenarioId;
    });

    if ($thisScenarioNotStarted->count()) {
      SendEmail::dispatch(
        $this->userId,
        __("notifications.{$scenarioId}.email.{$this->notificationType}.subject", compact('name', 'loginLink')),
        __("notifications.{$scenarioId}.email.{$this->notificationType}.message", compact('name', 'loginLink'))
      );
      
      // Remove links in text messages - cannot guarantee deliverability
      $loginLink = '-Wanda';
      
      SendTextMessage::dispatch($this->userId, __("notifications.{$scenarioId}.textMessage.{$this->notificationType}", compact('name', 'loginLink')));
      
      Log::info("Notifications sent");
    } else {
      Log::info("Notifications not needed - scenario has already been started");
    }
  }
}

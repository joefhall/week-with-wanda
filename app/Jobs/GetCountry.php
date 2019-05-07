<?php

namespace App\Jobs;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class GetCountry implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * User id.
   *
   * @param int
   */
  protected $userId;
  
  /**
   * IP address.
   *
   * @param string
   */
  protected $ip;
  
  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @param string $ip
   * @return void
   */
  public function __construct(int $userId, string $ip = null)
  {
    $this->userId = $userId;
    $this->ip = $ip;
  }

  /**
   * Execute the job.
   *
   * @param Client $client
   * @return void
   */
  public function handle(Client $client)
  {
    $user = User::find($this->userId);
    
    if ($user && $this->ip) {
      Log::info("Trying to look up country from IP address for user ({$this->userId}), IP address ({$this->ip})");
    
      try {
        $lookupUrl = env('IP_GEO_LOOKUP_URL') . '/' . env('IP_GEO_LOOKUP_KEY') . '/' . $this->ip;
        $ipData = $client->request('GET', $lookupUrl);
        
        if ($ipData) {
          $ipDataJson = json_decode($ipData->getBody()->getContents());

          if (isset($ipDataJson->country_code)) {
            $user->country = strtoupper($ipDataJson->country_code);
            $user->save();
          }
        }
      } catch (BadResponseException|ConnectException|ClientException|RequestException|ServerException|TransferException $e) {
        Log::error("Error looking up country from IP address for user ({$this->userId}), IP address ({$this->ip})");
      } catch (Exception $e) {
        Log::error("Error looking up country from IP address for user ({$this->userId}), IP address ({$this->ip})");
      }
    }
  }
}

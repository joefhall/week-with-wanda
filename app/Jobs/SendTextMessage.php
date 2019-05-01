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

class SendTextMessage implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * The id of the user we are sending the message to.
   *
   * @var int
   */
  protected $userId;
  
  /**
   * The text message to send.
   *
   * @var string
   */
  protected $message;
  
  /**
   * Create a new job instance.
   *
   * @param int $userId
   * @param string $message
   * @return void
   */
  public function __construct(int $userId, string $message)
  {
    $this->userId = $userId;
    $this->message = $message;
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
    $mobileNumber = $user->mobile_number;
    $sendTextMessages = $user->send_text_messages;
    
    $countriesRequiringFromNumber = ['CA', 'US'];
    
    Log::info("Sending text message to user({$this->userId}), mobile number($mobileNumber), message({$this->message})");
    
    if ($mobileNumber && $sendTextMessages && $user->mobile_number_verified_at) {
      $headers = [
        'Authorization' => 'AccessKey ' . env('SMS_SENDER_KEY'),
        'Accept' => 'application/json',
      ];
      
      if ($user->country && in_array($user->country, $countriesRequiringFromNumber)) {
        $url = env('SMS_CONVERSATIONS_URL');
        
        $params = [
            'to' => (string) $user->mobile_number,
            'from' => env('SMS_CHANNEL_ID'),
            'type' => 'text',
            'content' => [
              'text' => $this->message,
            ],
        ];
        
        try {
          $response = $client->post($url, [
            'headers' => $headers,
            'body' => json_encode($params)
          ])->getBody()->getContents();

          Log::info("SMS sender response: $response");
        } catch (RequestException $e) {
          Log::error("SMS sender error: " . print_r($e));
        } catch (\Exception $e) {
          Log::error("SMS sender error: " . print_r($e));
        }
      } else {
        $url = env('SMS_SENDER_URL');
        
        $params = [
          'recipients' => $user->mobile_number,
          'originator' => env('SMS_FROM_NAME'),
          'body' => $this->message,
        ];
        
        try {
          $response = $client->post(
              $url,
              [
                'headers' => $headers,
                'form_params' => $params,
              ]
            )->getBody()->getContents();

          Log::info("SMS sender response: $response");
        } catch (RequestException $e) {
          Log::error("SMS sender error: " . print_r($e));
        } catch (\Exception $e) {
          Log::error("SMS sender error: " . print_r($e));
        }
      }
    }
  }
}

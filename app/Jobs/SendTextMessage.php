<?php

namespace App\Jobs;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
    
    if ($mobileNumber && $sendTextMessages) {
      $headers = [
        'Authorization' => 'AccessKey ' . env('SMS_SENDER_KEY'),
        'Accept' => 'application/json',
      ];
      
      $params = [
        'recipients' => $user->mobile_number,
        'originator' => env('SMS_FROM_NAME'),
        'body' => $this->message,
      ];

      $response = $client->post(
          env('SMS_SENDER_URL'),
          [
            'headers' => $headers,
            'form_params' => $params,
          ]
        )->getBody()->getContents();
    }
  }
}

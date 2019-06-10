<?php

namespace App\Repositories;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserRepository
{
  /**
   * Find or create a user from their session ID.
   * We need this in order to start storing the user's chat history before they are actually registered.
   *
   * @param string $sessionId
   * @return User
   */
  public function findOrCreateFromSession(string $sessionId) {
    $user = User::where('session_id', $sessionId)->first();
    
    if (!$user) {
      $user = new User;
      $user->session_id = $sessionId;
      $user->save();
    }
    
    return $user;
  }
  
  /**
   * Update a field of a user's record.
   *
   * @param int $userId
   * @param string $field
   * @param bool|int|string $value
   * @return void
   */
  public function updateField(int $userId, string $field, $value) {    
    $user = User::find($userId);
    
    if ($user) {
      $user->{$field} = $value;
      $user->save();
    }
  }
  
  /**
   * Register a new user.
   *
   * @param int $userId
   * @param string $password
   * @return void
   */
  public function register(int $userId, string $password) {    
    $this->updateField($userId, 'first_name', $this->getMessageFromChatHistory($userId, 'user', 'myName'));
    $this->updateField($userId, 'email', $this->getMessageFromChatHistory($userId, 'user', 'myEmail'));
    $this->updateField($userId, 'password', bcrypt($password));
  }
  
  /**
   * Set a value in the pivot table linking the user to scenarios.
   *
   * @param int $userId
   * @param string $scenarioId
   * @param string $field
   * @param $value
   * @return void
   */
  public function setScenarioPivot(int $userId, string $scenarioId, string $field, $value) {
    $user = User::find($userId);
    
    if ($user) {
      $scenario = $user->scenarios()->where('scenario_id', $scenarioId)->first();

      if ($scenario) {
        $scenario->pivot[$field] = $value;
        $scenario->pivot->save();
      }
    }
  }
  
  /**
   * Add to the end of the user's chat history.
   *
   * @param int $userId
   * @param array $newChat
   * @return void
   */
  public function addToChatHistory(int $userId, array $newChat) {
    $user = User::find($userId);
    
    if ($user) {
      $chatHistory = json_decode($user->chat_history) ?? [];
      $chatHistory[] = $newChat;

      $user->chat_history = json_encode($chatHistory);
      $user->save();
    }
  }
  
  /**
   * Get the user's chat history.
   *
   * @param int $userId
   * @return array
   */
  public function getChatHistory(int $userId) {
    $user = User::find($userId);
    
    return $user && $user->chat_history ? json_decode($user->chat_history) : [];
  }
  
  /**
   * Get the last sender (user or wanda) in the user's chat history.
   *
   * @param int $userId
   * @return string|null
   */
  public function getLastSenderFromChatHistory(int $userId) {
    $user = User::find($userId);
    
    if ($user) {
      $chatHistory = json_decode($user->chat_history);
    
      if ($chatHistory) {
        $lastChatInteraction = end($chatHistory);

        return $lastChatInteraction->sender;
      }
    }
    
    return null;
  }
  
  /**
   * Get the last scenario in the user's chat history.
   *
   * @param int $userId
   * @return string|null
   */
  public function getLastScenarioFromChatHistory(int $userId) {
    $user = User::find($userId);
    
    if ($user) {
      $chatHistory = json_decode($user->chat_history);

      if ($chatHistory) {
        $lastChatInteraction = end($chatHistory);

        return $lastChatInteraction->scenario;
      }
    }
    
    return null;
  }
  
  /**
   * Get the text of a particular message from the user's chat history.
   *
   * @param int $userId
   * @param string $sender
   * @param string $messageId
   * @return string|null
   */
  public function getMessageFromChatHistory(int $userId, string $sender, string $messageId) {
    $user = User::find($userId);
    
    if ($user) {
      $chatHistory = json_decode($user->chat_history);

      foreach(array_reverse($chatHistory) as $chatInteraction) {
        if ($chatInteraction->sender === $sender && $chatInteraction->id === $messageId) {
          return $chatInteraction->message;
        }
      }
    }
    
    return null;
  }
  
  /**
   * Update the text of a particular message from the user's chat history.
   *
   * @param int $userId
   * @param string $sender
   * @param string $messageId
   * @param string $newMessageText
   * @return void
   */
  public function updateMessageFromChatHistory(int $userId, string $sender, string $messageId, string $newMessageText) {
    $user = User::find($userId);
    
    if ($user) {
      $chatHistory = json_decode($user->chat_history);

      foreach(array_reverse($chatHistory) as $chatInteraction) {
        if ($chatInteraction->sender === $sender && $chatInteraction->id === $messageId) {
          $chatInteraction->message = $newMessageText;
        }
      }

      $user->chat_history = json_encode($chatHistory);
      $user->save();
    }
  }
  
  /**
   * Store the chat history in the user's record.
   *
   * @param int $userId
   * @param string $currentScenario
   * @param string $userMessageId
   * @param string $userMessage
   * @param array $response
   * @return string
   */
  public function storeChatHistory(
    int $userId,
    string $currentScenario,
    string $userMessageId,
    string $userMessage = null,
    array $response
  )
  {
    if ($userMessageId !== 'begin') {
      Log::info("Storing chat history - user($userId), scenario($currentScenario), sender(user), userMessage($userMessageId)");
      
      if ($userMessageId === 'signupPasswordNone') {
        $userMessage = str_repeat('*', strlen($userMessage));
      }

      $this->addToChatHistory($userId, [
        'sender' => 'user',
        'scenario' => $currentScenario,
        'id' => $userMessageId,
        'message' => $userMessage,
        'time' => Carbon::now()->timestamp,
      ]);
    }

    if ($response && array_get($response, 'wanda') && !array_has($response, 'error')) {
      $user = User::find($userId);
      $wandaMessageId = key(array_get($response, 'wanda'));
      Log::info("Storing chat history - user($userId), scenario($currentScenario), sender(wanda), wandaMessage($wandaMessageId)");
      
      $this->addToChatHistory($userId, [
        'sender' => 'wanda',
        'scenario' => array_get($response, 'scenario'),
        'id' => $wandaMessageId,
        'message' => current(array_get($response, 'wanda')),
        'type' => array_get($response, 'type'),
        'userInput' => array_get($response, 'user'),
        'emotion' => array_get($response, 'emotion'),
        'meltdownLevel' => $user->meltdown_level,
        'identity' => $user->wanda_identity,
        'time' => Carbon::now()->timestamp + 1,
      ]);
    }
  }

  /**
   * Add a verification token belonging to the user.
   *
   * @param int $userId
   * @param string $type
   */
  public function addVerificationToken(int $userId, string $type)
  {
    $user = User::find($userId);
    
    if ($user) {
      switch ($type) {
        case 'email':
          $uuid = substr((string) Str::uuid(), 0, 7);
          break;
        case 'mobile_number':
          $uuid = (string) rand(1000000, 9999999);
          break;
      }

      $token = $user->verificationTokens()->create([
        'type' => $type,
        'uuid' => $uuid,
      ]);

      return $token;
    }
    
    return null;
  }
}

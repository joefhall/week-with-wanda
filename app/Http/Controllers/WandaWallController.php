<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Utilities\GetsChat;
use App\WallEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class WandaWallController extends Controller
{
  use GetsChat;
  
  /**
   * User Repository.
   *
   * @var UserRepository
   */
  protected $userRepository;

  /**
   * Constructor.
   *
   * @param UserRepository $userRepository
   * @return void
   */
  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }
  
  /**
   * Send the user's views about AI collected through the week.
   * Relevant chat interactions are specified in config/scenarios/aiViews
   *
   * @param Request $request
   * @return string
   */
  public function aiViews(Request $request)
  {
    $user = Auth::user();
    
    if (!$user) {
      $response = [
        'error' => 'user',
        'reason' => 'User not found',
      ];
    } else {
      $aiViews = config('scenarios.aiViews');
      
      $scenariosStarted = $user->scenarios()
                                ->wherePivot('started', '!=', null)
                                ->get(['scenarios.id AS scenario_id'])
                                ->pluck('scenario_id')
                                ->toArray();

      $aiViewsFound = [];
      $count = 0;
      
      foreach ($aiViews as $aiViewId => $aiView) {
        $currentViews = [];
        
        foreach ($aiView['scenarios'] as $aiViewScenarioId => $aiViewScenario) {
          if (in_array($aiViewScenarioId, $scenariosStarted)) {
            foreach ($aiViewScenario as $aiViewScenarioMessage) {
              $message = $this->userRepository->getMessageFromChatHistory($user->id, 'user', $aiViewScenarioMessage);
              
              if ($message) {
                if (!in_array(substr($message, -1), ['.', '!', '?'])) {
                  $message = $message . '.';
                }
                
                $currentViews['messages'][] = $message;
              }
            }
          }
        }
        
        if ($currentViews) {
          $aiViewsFound[] = [
            'description' => $aiView['description'],
            'messages' => $currentViews['messages'],
          ];
        }
        
        $count++;
      }
      
      $response = [
        'name' => $user->first_name,
        'countryName' => $this->getCountryName($user->country),
        'views' => $aiViewsFound,
      ];
    }
    
    return response()->json($response);
  }
  
  /**
   * Show all the Wanda's wall entries
   *
   * @param Request $request
   * @return string
   */
  public function index(Request $request)
  {
    $user = Auth::user();
    $loggedIn = $user ? 'true' : 'false';
    
    return $this->chatView($request, $loggedIn, 'wandaWall');
  }
  
  /**
   * Store a new Wanda wall entry
   *
   * @param Request $request
   */
  public function store(Request $request)
  {
    WallEntry::create([
      'comment' => strip_tags($request->input('comment')),
      'country_name' => strip_tags($request->input('countryName')),
      'name' => strip_tags($request->input('name')),
    ]);
    
    return redirect()->route('wall');
  }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\ScheduleWeek;
use App\Jobs\SendNotifications;
use App\Jobs\SendTextMessage;
use App\Jobs\SendVerificationEmail;
use App\Repositories\UserRepository;
use App\User;
use App\Utilities\DoesSpecialMessageActions;
use App\Utilities\GetsResponse;
use App\Utilities\GetsScenariosByDay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
  use DoesSpecialMessageActions, GetsResponse, GetsScenariosByDay;
  
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
   * Show the React app.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $user = Auth::user() ?? null;
    $loggedIn = Auth::user() ? 'true' : 'false';
    $startScenario = $user ? $user->current_scenario : 'welcomeSignup';
    $startMessage = 'begin';

    return response()
            ->view('app', compact('loggedIn', 'startScenario', 'startMessage'));
  }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Utilities\GetsResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
  use GetsResponse;
  
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
    return view('app', ['loggedIn' => Auth::user() ? 'true' : '']);
  }
}

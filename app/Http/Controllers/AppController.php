<?php

namespace App\Http\Controllers;

use App\Jobs\SendTextMessage;
use Illuminate\Http\Request;

class AppController extends Controller
{
  /**
   * Show the React app.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    return view('app');
  }
}

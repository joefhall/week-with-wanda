<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
  /**
   * Show the React app.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
//     dd(config("scenarios.welcome.wanda.howareyou"));
    
    return view('app');
  }
}

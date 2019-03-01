<?php

namespace App\Http\Controllers;

use App\Utilities\GetsResponse;

class AppController extends Controller
{
  use GetsResponse;
  
  /**
   * Show the React app.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
//     dd($this->getResponse('welcome', 'hi'));
    
    return view('app');
  }
}

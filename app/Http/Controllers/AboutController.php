<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{ 
  /**
   * Show the privacy policy.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function privacy(Request $request)
  { 
    return view('privacy');
  }
}

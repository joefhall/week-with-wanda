<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmotionController extends Controller
{ 
  /**
   * Show a list of all the emotions and their image - helpful for composing chats.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $emotions = Storage::disk('images')->files('emotions/');
    
    array_walk($emotions, function(&$filePath, $key) {
      $filePath = $this->getStringBetween($filePath, '/', '.');
    });
    
    return view('emotions', compact('emotions'));
  }
  
  /**
   * Get a substring between two characters.
   *
   * @param string $string
   * @param string $start
   * @param string $end
   * @return string
   */
  public function getStringBetween(string $string, string $start, string $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    
    return substr($string, $ini, $len);
  }
}

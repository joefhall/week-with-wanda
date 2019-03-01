<?php

namespace App\Http\Controllers;

use App\Utilities\GetsResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
  use GetsResponse;
  
  /**
   * Deal with user input and return a response.
   *
   * @param Request $request
   * @return string
   */
  public function respond(Request $request)
  {
    // TODO: store interaction in JSON chat history
    
    $response = $this->getResponse($request->input('scenario', 'welcome'), $request->input('user', 'begin'));
    
    return response()->json($response);
  }
}

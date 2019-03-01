<?php

namespace App\Http\Controllers;

use App\User;
use App\Utilities\GetsResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
    
    $response = $this->getResponse($request->input('scenario'), $request->input('user'));
    
    return response()->json($response);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{ 
  public function show() {
    $user = User::first();
    
    return response()->json([
        'name' => $user->first_name,
        'email' => $user->email,
    ]);
  }
}

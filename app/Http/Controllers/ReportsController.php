<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportsController extends Controller
{ 
  /**
   * Show some basic, non-confidential reporting.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $users = User::all();
    
    $usersReceivingTextMessages = $users->filter(function ($user, $key) {
      return $user->send_text_messages && $user->mobile_number && $user->mobile_number_verified_at;
    });
    
    $countries = $users->unique('country')->pluck('country')->toArray();
    $countryTotals = [];
    
    foreach ($countries as $country) {
      $countryTotals[$country]['textMessages'] = $usersReceivingTextMessages->where('country', $country)->count();
    }
    
    return view('reports', compact('countryTotals'));
  }
}

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::group([], function () {
  Route::get('/history', 'ChatController@history');
  Route::post('/respond', 'ChatController@respond');
});

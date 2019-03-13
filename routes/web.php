<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);
Route::get('login/facebook', 'Auth\FacebookLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::get('logged-out', function () {
    return view('auth.logged-out');
})->name('logged-out');

Route::get('/', 'AppController@index')->name('app');

Route::get('/verify/{verificationTokenId}', 'VerifyController@verify')->name('verify');

Route::group(['middleware' => ['web'], 'prefix' => 'api/'], function () {
  Route::get('history', 'ChatController@history');
  Route::post('respond', 'ChatController@respond');
});

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

Auth::routes();
Route::get('login-facebook', 'Auth\FacebookLoginController@showLoginWithFacebookForm')->middleware('guest')->name('facebookLogin');
Route::get('login/facebook', 'Auth\FacebookLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::post('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::view('login/facebook/denied', 'auth.facebook-signup-denied')->name('facebook-signup-denied');
Route::get('logged-out', function () {
    return view('auth.logged-out');
})->name('logged-out');

Route::get('/', 'AppController@index')->name('app');
Route::get('/verify/{verificationTokenId}', 'VerifyController@verify')->name('verify');

Route::get('/privacy', 'AboutController@privacy')->name('privacy');

Route::get('/emotions', 'EmotionController@index')->name('emotions');
Route::get('/scenarios', 'ScenarioController@index')->name('scenarios');
Route::get('/scenarios/{scenarioId}', 'ScenarioController@show');

Route::group(['middleware' => ['web'], 'prefix' => 'api/'], function () {
  Route::get('history', 'ChatController@history');
  Route::post('respond', 'ChatController@respond');
  Route::get('ai-views', 'WandaWallController@aiViews');
});

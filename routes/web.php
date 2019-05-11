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
Route::get('login-failed', 'Auth\LoginController@loginFailed')->name('login-failed');
Route::get('login-facebook', 'Auth\FacebookLoginController@showLoginWithFacebookForm')->middleware('guest')->name('facebookLogin');
Route::get('login/facebook', 'Auth\FacebookLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::post('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::get('login/facebook/denied', 'Auth\FacebookLoginController@denied')->name('facebook-login-denied');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logged-out', 'Auth\LoginController@loggedOut')->name('logged-out');
Route::get('password-reset-sent', 'Auth\ForgotPasswordController@resetPasswordSent')->name('password-reset-sent');
Route::get('password-reset-sent-failed', 'Auth\ForgotPasswordController@resetPasswordSentFailed')->name('password-reset-sent-failed');
Route::get('unsubscribe', 'Auth\UnsubscribeController@unsubscribe');

Route::get('/', 'AppController@index')->name('home');
Route::get('/about', 'AppController@about')->name('about');
Route::get('/privacy', 'AppController@privacy')->name('privacy');

Route::get('/wall', 'WandaWallController@index')->name('wall');
Route::post('/wall/create', 'WandaWallController@store')->name('wall-create');

Route::get('/emotions', 'EmotionController@index')->name('emotions');
Route::get('/scenarios', 'ScenarioController@index')->name('scenarios');
Route::get('/scenarios/{scenarioId}', 'ScenarioController@show');

Route::group(['middleware' => ['web'], 'prefix' => 'api/'], function () {
  Route::get('history', 'ChatController@history');
  Route::post('respond', 'ChatController@respond');
  Route::get('ai-views', 'WandaWallController@aiViews');
});

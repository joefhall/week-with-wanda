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
Route::get('login/facebook', 'Auth\FacebookLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::get('logged-out', function () {
    return view('auth.logged-out');
})->name('logged-out');

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::middleware('auth')->get('/app', 'AppController@index')->name('app');

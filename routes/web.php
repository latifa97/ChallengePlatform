<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ChallengesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ChallengesController@index')->name('home');

Route::get('/createChallenge', 'ChallengesController@create')->name('create');

Route::post('/createChallenge', 'ChallengesController@store')->name('store');

Route::get('/challenges', 'ChallengesController@getChallenges')->name('challenges');

Route::any('/delete/{id}', 'ChallengesController@delete')->name('delete');


Route::get('/participate',  function () {
    return view('participate');
});

Route::get('/organizers', 'UsersController@getOrganizers')->name('organizers');
Route::get('/participants', 'UsersController@getParticipants')->name('participants');




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'as' => 'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']],
function(){
    Route::get('dashboard', 'DashboardController@index')-> name('dashboard');
});

Route::group([ 'as' => 'organizer.', 'prefix'=>'organizer', 'namespace'=>'Organizer', 'middleware'=>['auth','organizer']],
function(){
    Route::get('dashboard', 'DashboardController@index')-> name('dashboard');
});
Route::group([ 'as' => 'participant.', 'prefix'=>'participant', 'namespace'=>'Participant', 'middleware'=>['auth','participant']],
function(){
    Route::get('dashboard', 'DashboardController@index')-> name('dashboard');
});


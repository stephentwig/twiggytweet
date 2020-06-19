<?php

//to get the actual DB query
//DB:listen(function ($query) {var_dump($query->sql, $query->bindings); });
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

Route::get('/', function () {
    return view('welcome');
});



// to prevent guests from accessing
Route::middleware('auth')->group(function () {

    // to view all the tweets
    Route::get('/tweets', 'TweetController@index')->name('home');

    // to store the tweet
    Route::post('/tweets', 'TweetController@store');

});



Auth::routes();



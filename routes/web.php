<?php

use App\Http\Controllers\TweetsController;
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

Auth::routes();

//Route::resource('/tweets', 'TweetsController');

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store')->name('tweet.like');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy')->name('tweet.dislike');

    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get(
        '/profiles/{user:username}/edit',
        'ProfilesController@edit'
    )->middleware('can:edit,user');

    Route::patch(
        '/profiles/{user:username}',
        'ProfilesController@update'
    )->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');

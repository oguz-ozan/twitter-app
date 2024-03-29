<?php

// DB dinleme komutu
// DB::listen(function ($query) { var_dump($query->sql, $query->bindings);});

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::post('/follow/{user:username}', 'ProfileController@follow')->name('toggle_follow');
    Route::get('/profile/{user:username}/edit', 'ProfileController@edit')->name('edit_profile')->middleware('can:edit,user');
    Route::post('/profile/{user:username}', 'ProfileController@update')->name('update_profile');
    Route::get('/explore', 'UserController@explore');

});

Route::get('/profile/{user:username}', 'ProfileController@show')->name('profile');

require __DIR__ . '/auth.php';

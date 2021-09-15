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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::post('login', 'HomeController@login')->name('login.user');
Route::get('logout', 'HomeController@logout')->name('logout.user');

Route::resource('posts', 'PostController')->middleware('auth');

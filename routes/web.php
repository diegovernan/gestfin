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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/category', 'HomeController@storeCategory')->name('home.store.category');
Route::post('/home/transaction', 'HomeController@storeTransaction')->name('home.store.transaction');

Route::patch('/home/category/{category}', 'HomeController@updateCategory')->name('home.update.category');
Route::patch('/home/transaction/{transaction}', 'HomeController@updateTransaction')->name('home.update.transaction');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

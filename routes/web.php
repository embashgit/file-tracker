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

Route::prefix('manage')->group(function(){
	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('items', 'ItemController');
    Route::resource('histories', 'HistoryController');
    Route::resource('organizations', 'OrganizationController');
    Route::resource('locations', 'LocationController');
    Route::resource('/users', 'UserController');   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

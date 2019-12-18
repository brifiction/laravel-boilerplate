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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/account', 'User\AccountController@index')->name('account');
//    Route::post('/account', 'User\AccountController@update')->name('account-update'); // update user details
//    Route::post('/account/password', 'User\AccountController@updatePassword')->name('account-password-update'); // update user password only
//    Route::post('/account/delete', 'User\AccountController@delete'); // delete user details
});

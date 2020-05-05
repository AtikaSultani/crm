<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'ComplaintController@dashboard');

// Porgram routes
Route::resource('/programs', 'ProgramController');

// project routes
Route::resource('/projects', 'ProjectController');

// complaints routes
Route::resource('/complaints', 'ComplaintController');

// districts
Route::get('/home/district/{id}', 'ComplaintController@districts');

// New UI designs
Route::prefix('new')->group(function () {
    Route::view('login', 'new.login');
    Route::view('reset', 'new.reset');
});

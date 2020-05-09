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

Route::get('/', 'DashboardController');
Route::get('/complaint-export','ComplaintController@export');
// complaints routes
Route::resource('/complaints', 'ComplaintController');


// Program routes
Route::resource('/programs', 'ProgramController');

// project routes
Route::resource('/projects', 'ProjectController');

// districts
Route::get('/home/district/{id}', 'ComplaintController@districts');

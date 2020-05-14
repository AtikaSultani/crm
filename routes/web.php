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

// complaints routes
Route::resource('/complaints', 'ComplaintController');
Route::post('/complaint-export','ComplaintController@export');

// Program routes
Route::resource('/programs', 'ProgramController');

// project routes
Route::resource('/projects', 'ProjectController');

// districts
Route::get('/provinces/{id}/districts', 'ProvinceController@districts');

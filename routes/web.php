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
Route::get('/complaint-export','ComplaintController@export');
Route::get('/ComplaintController/ComplaintDetail/{id}','ComplaintController@details');

// Program routes
Route::resource('/programs', 'ProgramController');

// project routes
Route::resource('/projects', 'ProjectController');
Route::get('/ProjectController/ProjectDetail/{id}','ProjectController@ProjectDetail');

// districts
Route::get('/provinces/{id}/districts', 'ProvinceController@districts');

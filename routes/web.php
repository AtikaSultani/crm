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

Route::get('/', 'Home@dashboard');

Route::get('/programs', 'ProgramController@index');
Route::get('/program/create', 'ProgramController@create');
Route::post('/programs', 'ProgramController@store');
Route::get('/programs/{id}/edit', 'ProgramController@edit');
Route::delete('/ProgramController/{id}', 'ProgramController@destroy');

// project routes
Route::resource('projects', 'ProjectController');

Route::get('/home', 'Home@dashboard');
Route::get('/home/list', 'Home@index');
Route::get('/home/create', 'Home@create');
Route::post('/home', 'Home@store');
Route::get('/edit/{id}', 'Home@edit');
Route::delete('/home/{id}', 'Home@destroy');
Route::get('/home/district/{id}', 'Home@districts');


// New UI designs
Route::prefix('new')->group(function () {
    Route::get('login', function () {
        return view('new.login');
    });
});

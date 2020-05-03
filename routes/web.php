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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/programs','ProgramController@index');
Route::get('/program/create','ProgramController@create');
Route::post('/programs','ProgramController@store');
Route::get('/edit/{id}','ProgramController@edit');
Route::delete('/ProgramController/{id}','ProgramController@destroy');

Route::get('/projects','ProjectController@index');
Route::get('/projects/create','ProjectController@create');
Route::post('/projects','ProjectController@store');
Route::get('/edit/{id}','ProjectController@edit');
Route::delete('/ProjectController/{id}','ProjectController@destroy');

Route::get('/home','Home@dashboard');
Route::get('/home/list','Home@index');
Route::get('/home/create','Home@create');
Route::post('/home','Home@store');
Route::get('/edit/{id}','Home@edit');
Route::delete('/home/{id}','Home@destroy');
Route::get('/home/district/{id}','Home@districts');

// New UI designs
Route::prefix('new')->group(function () {
    Route::get('login', function () {
        return view('new.login');
    });
});
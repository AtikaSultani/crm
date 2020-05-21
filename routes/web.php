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

Auth::routes(['verify' => true]);
Route::get('/', 'DashboardController');

// complaints routes
Route::resource('/complaints', 'ComplaintController');
Route::post('/complaint-export', 'ComplaintController@export');

// Program routes
Route::resource('/programs', 'ProgramController');

// project routes
Route::resource('/projects', 'ProjectController');

// districts
Route::get('/provinces/{id}/districts', 'ProvinceController@districts');

// users routes
Route::resource('/users', 'UserController');
Route::get('/users/{id}/assign-role', 'RoleController@getUserRole');
Route::post('/users/{id}/assign-role', 'RoleController@assignRole');

// Sync permission to a role
Route::post('/roles/{id}/sync-permissions', 'RoleController@syncPermissions');
// Role routes
Route::resource('/roles', 'RoleController');

// Back up routes
Route::get('/settings', 'SettingController@index');
Route::get('backups/download/{file}', 'BackupController@download');
Route::get('backups/backup-now', 'BackupController@backup');


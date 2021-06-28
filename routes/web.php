<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
Route::group(['middleware' => 'prevent.back.history'], function () {

    Auth::routes(['verify' => true]);
    Route::get('/', 'DashboardController');

    // complaints routes
    Route::resource('/complaints', 'ComplaintController');

    // Program routes
    Route::resource('/programs', 'ProgramController');

    // project routes
    Route::resource('/projects', 'ProjectController');

    // districts
    Route::get('/provinces/{id}/districts', 'ProvinceController@districts');

    // projects per province
    Route::get('/provinces/{id}/projects', 'ProvinceController@projects');

    // users routes
    Route::resource('/users', 'UserController');
    Route::get('/users/{id}/assign-role', 'RoleController@getUserRole');
    Route::post('/users/{id}/assign-role', 'RoleController@assignRole');

    // user profile
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile/change-password', 'ProfileController@changePassword');

    // Sync permission to a role
    Route::post('/roles/{id}/sync-permissions', 'RoleController@syncPermissions');
    // Role routes
    Route::resource('/roles', 'RoleController');

    // Back up routes
    Route::get('/settings', 'SettingController@index');
    Route::get('backups/backup-now', 'BackupController@backup');
    Route::resource('/guidline','GuidlineController');

});

// Download files
Route::get('download', function () {
    return Storage::download(request('file'));
});
Route::get('backups/download/{file}', 'BackupController@download');
Route::post('/complaint-export', 'ComplaintController@export');

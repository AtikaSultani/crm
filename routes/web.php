<?php

use App\Http\Controllers\BackupController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuidlineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    Route::get('/', DashboardController::class);

    // complaints routes
    Route::resource('/complaints', ComplaintController::class);

    // Program routes
    Route::resource('/programs', ProgramController::class);

    // project routes
    Route::resource('/projects', ProjectController::class);

    // districts
    Route::get('/provinces/{id}/districts', [ProvinceController::class, 'districts']);

    // projects per province
    Route::get('/provinces/{id}/projects', [ProvinceController::class, 'projects']);

    // users routes
    Route::resource('/users', UserController::class);
    Route::get('/users/{id}/assign-role', [RoleController::class, 'getUserRole']);
    Route::post('/users/{id}/assign-role', [RoleController::class, 'assignRole']);

    // user profile
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword']);

    // Sync permission to a role
    Route::post('/roles/{id}/sync-permissions', [RoleController::class, 'syncPermissions']);
    // Role routes
    Route::resource('/roles', RoleController::class);

    // Back up routes
    Route::get('/settings', [SettingController::class, 'index']);
    Route::get('backups/backup-now', [BackupController::class, 'backup']);
    Route::resource('/guidline', GuidlineController::class);

});

// Download files
Route::get('download', function () {
    return Storage::download(request('file'));
});

Route::get('backups/download/{file}', [BackupController::class, 'download']);
Route::post('/complaint-export', [ComplaintController::class, 'export']);

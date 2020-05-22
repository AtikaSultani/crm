<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Spatie\Activitylog\Models\Activity;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get main page of setting
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $databases = $this->backups();
        $logs = $this->activityLogs();

        return view('setting.index', compact('databases', 'logs'));
    }

    /**
     * Get all files of back ups
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private function backups()
    {
        // splFileInfo files
        $databases = [];

        $filesInFolder = File::files(storage_path('backups'));

        foreach ($filesInFolder as $path) {
            $databases[] = $path;
        }

        return collect(array_reverse($databases))->sortByDesc(function ($database) {
            return $database->getATime();
        })->take(10);
    }

    /**
     * Get user activity logs
     *
     * @return mixed
     */
    private function activityLogs()
    {
        return Activity::orderBy('created_at', 'desc')->paginate(10);
    }
}

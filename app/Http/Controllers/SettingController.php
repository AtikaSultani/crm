<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware(['permission:View Backups'])->only('index');
//        $this->middleware(['permission:Download Backup'])->only('download');
    }

    /**
     * Get main page of setting
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $databases = collect($this->backups())->sortByDesc(function ($database) {
            return $database->getATime();
        })->take(10);

        return view('setting.index', compact('databases'));
    }

    /**
     * Get all files of back ups
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function backups()
    {
        // splFileInfo files
        $databases = [];

        $filesInFolder = File::files(storage_path('backups'));

        foreach ($filesInFolder as $path) {
            $databases[] = $path;
        }

        // reverse the file based on name
        return array_reverse($databases);
    }

    /**
     * Get download the database back up
     *
     * @param $file
     * @return mixed
     */
    public function download($file)
    {
        $logProperty = [
            'attributes' => [
                'file' => $file
            ]
        ];

        activity('Back up')
            ->causedBy(Auth::id())
            ->withProperties($logProperty)
            ->log('Downloaded');

        return Storage::disk('backups')->download($file, $file);
    }

}

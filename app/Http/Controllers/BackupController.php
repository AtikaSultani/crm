<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{

    public function __construct()
    {
//        $this->middleware(['permission:View Backups'])->only('index');
//        $this->middleware(['permission:Download Backup'])->only('download');
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


    /**
     * Backup database now
     */
    public function backup()
    {
        Artisan::call('db:backup');

        return back()->with('message', 'Database Backup just now.');
    }

}

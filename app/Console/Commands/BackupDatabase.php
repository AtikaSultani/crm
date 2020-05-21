<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class BackupDatabase extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database';

    protected $process;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $backupName = 'Backup_'.date('Y').'_'.date('m').'_'.date('d').'.sql';

        $this->process = new Process([
                sprintf(
                    'mysqldump -u%s -p%s %s > %s',
                    config('database.connections.mysql.username'),
                    config('database.connections.mysql.password'),
                    config('database.connections.mysql.database'),
                    storage_path('backups/'.$backupName)
                )
            ]
        );
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $this->process->mustRun();
            info('The backup has been proceed successfully.');
        } catch (ProcessFailedException $exception) {
            error('The backup process has been failed.');
        }
    }
}

<?php

namespace App\Console\Commands;

use Faker\Core\File;
use Illuminate\Console\Command;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backupDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database to a file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $databaseName = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host = env('DB_HOST');
        $port = env('DB_PORT', '3306');

        $date = now()->format('Y-m-d_H-i-s');
        $backupFile = "backups/{$databaseName}_{$date}.sql";

/*ensure "backups" directory exists in storage
if (!file_exists(storage_path('backups'))) {
File::makeDirectory($backups, 0755, true);
}

//path instead in enviroment varibles
$mysqldump = 'D:\\xampp\\mysql\\bin\\mysqldump.exe';

 */

        $command = "mysqldump --user={$username} --password={$password} --host={$host} --port={$port} {$databaseName} > " . storage_path($backupFile); # Builds the command string to execute mysqldump with the specified options, redirecting the output to the backup file in the storage directory.

        exec($command, $output, $return); # Executes the mysqldump command. The exec function runs the command in the shell. $output captures the command’s output (e.g., error messages), and $return captures the command’s exit status.

        if ($return === 0) {
            $this->info('Backup successfully created: ' . $backupFile);
        } else {
            $this->error('Backup failed.');

        }
    }

}

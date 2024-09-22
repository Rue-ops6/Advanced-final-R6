<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ExpirationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:user-expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User-expiration after it becomes 1 = wasnt active for a while';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::where('active', '=', 0) #default is him being active =1, so check if it with time became 0 and delete him, until he login again
            ->delete();
    }
    /* Or
$users = User::where('active', '=', 0)->get();
foreach($users as $user) { #loop to inspect'em all which is not necessary we can get'em all as above, then update all
$user->update([
'active' => 1
]);
}        */
}

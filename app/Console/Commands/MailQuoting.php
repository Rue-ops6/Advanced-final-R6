<?php

namespace App\Console\Commands;

use App\Mail\QuotingMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailQuoting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:quoting-mailable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mailable inspiration; send Newsletter emails for users applying for qouting service';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('test@example.com')->send(new QuotingMail);
    }
}

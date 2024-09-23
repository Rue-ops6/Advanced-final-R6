<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// ->everyMinute(); only for test. warning Mailtrap have a limit of 100 msg only, thus stop it with ctrl c
Schedule::command('app:quoting-mailable')->weeklyOn(6, '18:30'); #command signiture then run it w/ schedule work
Schedule::command('app:user-expiration')->monthly(); #command signiture then run it w/ schedule work
Schedule::command('app:backupDB')->daily();

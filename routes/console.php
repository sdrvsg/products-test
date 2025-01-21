<?php

use App\Jobs\SendLatestProductWebhook;
use Illuminate\Support\Facades\Schedule;

Schedule::job(SendLatestProductWebhook::class)->everyMinute();

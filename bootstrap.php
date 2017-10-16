<?php

namespace Flagrow\Chronos;

use Flarum\Foundation\Application;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Application $app) {
    // Binds a single instance of the Schedule into IoC.
    $app->singleton(Schedule::class);

    // Adds the schedule run command to the flagrow console command.
    $events->subscribe(Listeners\AddScheduleRunCommand::class);
};

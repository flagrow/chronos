<?php

namespace Flagrow\Chronos\Listeners;


use Flagrow\Console\Events\ConfigureConsoleApplication;
use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Illuminate\Contracts\Events\Dispatcher;

class AddScheduleRunCommand
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureConsoleApplication::class, [$this, 'add']);
    }

    /**
     * @param ConfigureConsoleApplication $event
     */
    public function add(ConfigureConsoleApplication $event)
    {
        if ($event->app->isInstalled()) {
            $event->console->add($event->app->make(ScheduleRunCommand::class));
        }
    }
}

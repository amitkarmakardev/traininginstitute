<?php

namespace App\Listeners;

use App\Events\TrainingEnded;

class RemoveTraineesFromLibUser
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TrainingEnded $event
     * @return void
     */
    public function handle(TrainingEnded $event)
    {
        $event->training->libUsers->each(function ($libUser) {
            $libUser->delete();
        });
    }
}

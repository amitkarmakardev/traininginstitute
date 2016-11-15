<?php

namespace App\Listeners;

use App\Events\TrainingEnded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RemoveTraineesFromLibUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TrainingEnded  $event
     * @return void
     */
    public function handle(TrainingEnded $event)
    {
        //
    }
}

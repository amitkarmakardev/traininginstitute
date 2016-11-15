<?php

namespace App\Listeners;

use App\Events\TrainingStarted;
use App\LibUser;
use App\Trainee;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddTraineesAsLibUser
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
     * @param  TrainingStarted  $event
     * @return void
     */
    public function handle(TrainingStarted $event)
    {
        $trainee_list = $event->training->trainees;

        foreach($trainee_list as $trainee){
            LibUser::create(['user_id' => $trainee->reg_id, 'name' => $trainee->name,
                'email' => $trainee->email, 'org_details' => $trainee->org_details, 'type' => 'trainee']);
        }
    }
}

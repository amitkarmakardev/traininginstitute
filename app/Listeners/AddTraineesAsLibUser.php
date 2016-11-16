<?php

namespace App\Listeners;

use App\Events\TrainingStarted;

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
     * @param  TrainingStarted $event
     * @return void
     */
    public function handle(TrainingStarted $event)
    {
        $trainee_list = $event->training->trainees;

        foreach ($trainee_list as $trainee) {
            $trainee->libUser()->create(['user_id' => $trainee->reg_id, 'name' => $trainee->name,
                'email' => $trainee->email, 'org_details' => $trainee->org_details,
                'type' => 'trainee', 'training_code' => $trainee->training->code]);
        }
    }
}

<?php

namespace App\Listeners;

use App\Events\TraineeRegistered;
use App\Mail\TraineeRegConfMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendRegConfirmEmail
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
     * @param  TraineeRegistered  $event
     * @return void
     */
    public function handle(TraineeRegistered $event)
    {
        Mail::to($event->trainee->email)->send(new TraineeRegConfMail($event->trainee));
    }
}

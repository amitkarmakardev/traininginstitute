<?php

namespace App\Mail;

use App\Trainee;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TraineeRegConfMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $trainee;

    public function __construct(Trainee $trainee)
    {
        $this->trainee = $trainee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $trainee = $this->trainee;
        return $this->subject('Registration confirmation mail')->view('admin.email.reg-confirm', compact('trainee'));
    }
}

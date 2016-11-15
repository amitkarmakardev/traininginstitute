<?php

namespace App\Events;

use App\Trainee;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TraineeRegistered
{
    use InteractsWithSockets, SerializesModels;

    public $trainee;

    /**
     * Create a new event instance.
     *
     * @param Trainee $trainee
     */
    public function __construct(Trainee $trainee)
    {
        $this->trainee = $trainee;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

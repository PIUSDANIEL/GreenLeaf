<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SpecialistSpecialty
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;
    public $specialty;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email,$specialty)
    {
        $this->email = $email;
        $this->specialty = $specialty;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use App\Models\Queue;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QueueCalled implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $queue_number;
    public $service_name;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Queue $queue)
    {
        $this->queue_number = $queue->queue_number;
        $this->service_name = $queue->service_name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('queue-channel');
    }

    
}
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

    public $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }

    public function broadcastOn()
    {
        return new Channel('queue-channel');
    }

    public function broadcastWith()
    {
        return [
            'queue_number' => $this->queue->queue_number,
            'called_at' => $this->queue->called_at->toDateTimeString(),
        ];
    }
}
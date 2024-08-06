<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Anime;
use Illuminate\Support\Facades\Log;

class NewAnimeAiringEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $anime;

    public function __construct(Anime $anime)
    {
        $this->anime = $anime;

        dump('is async1');
        Log::debug("[event] new anime airing1:", []);
    }

    public function broadcastOn(): array
    {
        Log::debug("[event] new anime airing2:", []);

        return [
            new PrivateChannel('channel-name'),
        ];
    }
}

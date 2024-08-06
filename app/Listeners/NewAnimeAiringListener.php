<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Throwable;

class NewAnimeAiringListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $connection = 'redis';

     /**
     * The number of times the queued listener may be attempted till suspected as failed.
     *
     * @var int
     */
    public $tries = 5;

    public function __construct()
    {
        Log::debug("[listener] new anime airing1:", []);
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $anime = $event->anime;
        dump('is async2');
        Log::debug("[listener] new anime airing2:", []);
    }

    public function failed(object $event, Throwable $exception): void
    {
        // ...
    }
}

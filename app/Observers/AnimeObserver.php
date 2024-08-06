<?php

namespace App\Observers;

use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Log;
use App\Models\Anime;

class AnimeObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Anime "created" event.
     */
    public function created(Anime $anime): void
    {
        dump('created', $anime->id);
        Log::debug('created', [$anime->id]);
    }

    /**
     * Handle the Anime "updated" event.
     */
    public function updated(Anime $anime): void
    {
        dump('updated', $anime->id);
        Log::debug('updated', [$anime->id]);

        if($anime->status_id==2){
            // new anime airing
            // stuff to do
        }
    }

    /**
     * Handle the Anime "deleted" event.
     */
    public function deleted(Anime $anime): void
    {
        dump('deleted', $anime->id);
        Log::debug('deleted', [$anime->id]);
    }

    /**
     * Handle the Anime "restored" event.
     */
    public function restored(Anime $anime): void
    {
        dump('restored', $anime->id);
        Log::debug('restored', [$anime->id]);
    }

    /**
     * Handle the Anime "force deleted" event.
     */
    public function forceDeleted(Anime $anime): void
    {
        dump('forceDeleted', $anime->id);
        Log::debug('forceDeleted', [$anime->id]);
    }
}

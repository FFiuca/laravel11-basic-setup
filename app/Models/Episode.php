<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Master\Language;
use App\Models\Anime;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Master\Status;

class Episode extends Model
{
    use HasFactory;

    protected $guarded= ['id'];

    // rel
    public function anime(): BelongsTo{
        return $this->belongsTo(Anime::class, 'anime_id', 'id');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class, 'st_id', 'id');
    }

    public function language() : BelongsToMany{
        return $this->belongsToMany(Language::class, EpisodeLanguagePivot::class, 'episode_id', 'language_id');
    }

}

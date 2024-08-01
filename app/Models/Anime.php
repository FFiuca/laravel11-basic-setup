<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Master\Category;
use App\Models\Episode;
use App\Models\Master\Status;
use App\Models\User;
use App\Models\Master\Tag;
use App\Models\Master\Language;
use App\Models\AnimeArtistPivot;
use App\Models\AnimeCategoryPivot;
use App\Models\AnimeAuthorPivot;
use App\Models\AnimeLanguage;


class Anime extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // rel

    public function category(): BelongsToMany{
        return $this->belongsToMany(Category::class, AnimeCategoryPivot::class, 'anime_id', 'category_id');
    }

    public function episode(): HasMany{
        return $this->hasMany(Episode::class, 'anime_id', 'id');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class); // auto discover for columns
    }

    public function artist(): BelongsToMany{
        return $this->belongsToMany(User::class, AnimeArtistPivot::class, 'anime_id', 'user_id');
    }

    public function author(): BelongsToMany{
        return $this->belongsToMany(User::class, AnimeAuthorPivot::class, 'anime_id', 'user_id');
    }

    public function tag() : BelongsToMany{
        return $this->belongsToMany(Tag::class, AnimeTagPivot::class, 'anime_id', 'tag_id');
    }

    public function language() : BelongsToMany{
        return $this->belongsToMany(Language::class, AnimeLanguage::class, 'anime_id', 'language_id');
    }


}

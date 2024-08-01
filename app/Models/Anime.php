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

class Anime extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // rel

    public function category(): BelongsToMany{
        return $this->belongsToMany(Category::class, AnimeCategoryPivot::class, 'category_id', 'anime_id');
    }

    public function episode(): HasMany{
        return $this->hasMany(Episode::class, 'anime_id', 'id');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class); // auto discover for columns
    }


}

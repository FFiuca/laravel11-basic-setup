<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\Anime;

class Mentioned extends Model
{
    use HasFactory;

    // setup multiple pkey
    protected $primaryKey = ['user_id', 'anime_id'];
    protected $keyType = ['int', 'int'];
    public $incrementing = false;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function anime(): BelongsTo{
        return $this->belongsTo(Anime::class,'anime_id','id');
    }
}

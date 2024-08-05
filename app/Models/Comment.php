<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // rel
    function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function episode(): BelongsTo{
        return $this->belongsTo(Episode::class,'episode_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments(): MorphMany {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

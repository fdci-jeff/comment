<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comments extends Model
{
    use HasFactory;

    public function commentable() {
        return $this->morphTo();
    }

    public function comments(): HasMany {
        return $this->hasMany(Comments::class, 'parent_comment_id');
    }

    public function parent(): BelongsTo {
        return $this->belongsTo(Comments::class, 'parent_comment_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}

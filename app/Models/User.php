<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }

    public function comments() :HasMany
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    public function likes() : BelongsToMany
    {
        return $this->belongsToMany(Like::class, 'user_id', 'id');
    }
}

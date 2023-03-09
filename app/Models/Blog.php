<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use DB;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Like::class, 'blog_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getAllBlogs()
    {

        $blogs = DB::table($this->table)->orderBy('created_at', 'desc')->get();
        // dd($blogs);
        return $blogs;
    }
}

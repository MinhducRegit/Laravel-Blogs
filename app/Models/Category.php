<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }

    public function Category()
    {

        $categories = DB::table($this->table)->orderBy('created_at', 'desc')->get();
        // dd($categories);
        return $categories;
    }
}

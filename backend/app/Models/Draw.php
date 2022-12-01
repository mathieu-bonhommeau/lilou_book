<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Draw extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'path',
        'likes',
        'isPublished',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'draws_tags');
    }
}

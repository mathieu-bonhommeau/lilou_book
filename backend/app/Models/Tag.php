<?php

namespace App\Models;

use App\Models\Draw;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function draws()
    {
        $this->belongsToMany(Draw::class, 'draws_tags');
    }
}

<?php

namespace App\Models;

use App\Models\Draw;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_valid',
        'draw_id',
        'user_id',
    ];

    public function draw()
    {
        $this->belongsTo(Draw::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}

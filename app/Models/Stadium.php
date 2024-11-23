<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    /** @use HasFactory<\Database\Factories\StadiumFactory> */
    use HasFactory;

    // Model relationships --------
    public function articles()
    {
        return $this->hasMany(Article::class, 'article_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}

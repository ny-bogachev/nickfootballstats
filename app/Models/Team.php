<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    // Model relationships
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_team');
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class);
    }
}

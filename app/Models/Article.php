<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = ['title','score', 'stadia_id'];

    // Model relationships --------

    public function stadium()
    {
        return $this->belongsTo(Stadium::class, 'stadia_id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'article_team');
    }

    // Model scopes--------
    public function scopePublished($query)
    {
        return $query->whereNotNull('match_date')->where('match_date', '<=', now());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::whereNotNull('match_date')->get()->sortByDesc('match_date');

        return view('welcome', compact('articles'));
    }
}

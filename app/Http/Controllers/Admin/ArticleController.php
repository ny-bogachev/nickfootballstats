<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:4', 'max:255'],
            'score' => ['required', 'string'],
            'stadia_id' => ['required'],
        ]);

        $article = Article::create([
            'title' => $request->title,
            'score' => $request->score,
            'stadia_id' => $request->stadia_id,
        ]);

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);

        return view('admin.articles.edit', compact('article'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:4', 'max:255'],
            'score' => ['required', 'string'],
            'stadia_id' => ['required'],
        ]);

        $article = Article::find($id);

        $article->update([
            'title' => $request->title,
            'score' => $request->score,
            'stadia_id' => $request->stadia_id,
        ]);

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

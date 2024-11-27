<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public visible routes
Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('matches',[\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('matches/{id}',[\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

Route::get('teams',[\App\Http\Controllers\TeamController::class, 'index'])->name('teams.index');
Route::get('teams/{id}',[\App\Http\Controllers\TeamController::class, 'show'])->name('teams.show');

// Authenticated routes
Route::resource('admin/matches', \App\Http\Controllers\Admin\ArticleController::class)
    ->middleware(['auth', 'verified'])
    ->names([
        'index' => 'admin.articles.index',
        'show' => 'admin.articles.show',
        'create' => 'admin.articles.create',
        'store' => 'admin.articles.store',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


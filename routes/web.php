<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public visible routes
Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('matches',[\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('matches/{id}',[\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

// Authenticated routes
Route::get('admin/matches',[\App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin.articles.index');
Route::get('admin/matches/{article}',[\App\Http\Controllers\Admin\ArticleController::class, 'show'])->name('admin.articles.show');
Route::get('admin/matches/create',[\App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('admin.articles.create');
Route::post('admin/matches',[\App\Http\Controllers\Admin\ArticleController::class, 'store'])->name('admin.articles.store');
Route::get('admin/matches/{article}/edit',[\App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('admin.articles.edit');
Route::put('admin/matches/{article}',[\App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('admin.articles.update');
Route::delete('admin/matches/{article}',[\App\Http\Controllers\Admin\ArticleController::class, 'destroy'])->name('admin.articles.destroy');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/

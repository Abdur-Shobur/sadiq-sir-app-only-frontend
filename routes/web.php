<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Frontend routes
Route::get('/blogs', function () {
    $blogs = \App\Models\Blog::with('category')->where('status', true)->latest()->paginate(12);
    return view('blogs.index', compact('blogs'));
})->name('blogs.index');

Route::get('/blogs/{blog}', function (\App\Models\Blog $blog) {
    return view('blogs.show', compact('blog'));
})->name('blogs.show');

Route::get('/galleries', function () {
    $galleries = \App\Models\Gallery::with('category')->latest()->paginate(12);
    return view('galleries.index', compact('galleries'));
})->name('galleries.index');

Route::get('/galleries/{gallery}', function (\App\Models\Gallery $gallery) {
    return view('galleries.show', compact('gallery'));
})->name('galleries.show');

Route::get('/research', [ResearchController::class, 'index'])->name('research.index');
Route::get('/research/{research}', [ResearchController::class, 'show'])->name('research.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

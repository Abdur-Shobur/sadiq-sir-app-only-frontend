<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public API Routes
Route::get('blogs', function () {
    return App\Models\Blog::where('status', 'published')->with('category')->latest()->paginate(10);
});

Route::get('events', function () {
    return App\Models\Event::where('status', 'upcoming')->latest()->paginate(10);
});

Route::get('galleries', function () {
    return App\Models\Gallery::with('category')->latest()->paginate(12);
});

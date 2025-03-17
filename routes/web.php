<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{article_news:slug}', [FrontController::class, 'details'])->name('front.details');
// Route::get('/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/galeri', [FrontController::class, 'galeri'])->name('front.galeri');
Route::get('/opini', [FrontController::class, 'opini'])->name('front.opini');
Route::get('/berita', [FrontController::class, 'berita'])->name('front.berita');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('front.kontak');
Route::get('/author/{author:slug}', [FrontController::class, 'author'])->name('front.author');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');

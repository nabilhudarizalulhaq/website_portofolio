<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// ===== Landing Page =====
Route::get('/', function () {
    return view('landing');
});

// ===== Content Routes =====
Route::get('/admin/contents', [ContentController::class, 'index'])->name('content.index');
Route::post('/admin/contents', [ContentController::class, 'update'])->name('content.update');
Route::delete('/admin/contents/{id}', [ContentController::class, 'destroy'])->name('content.destroy');
Route::resource('content', ContentController::class);

// ===== Portfolio Routes (Frontend) =====
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// CRUD Portfolio → sudah otomatis ditangani Filament di /admin/portfolios
// Jadi tidak perlu lagi Route::resource('portfolios', PortfolioController::class);

// ===== Skills Routes =====
Route::get('/skills', [SkillsController::class, 'index'])->name('skills.index');

// ===== About Routes =====
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// ===== Contact Routes =====
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

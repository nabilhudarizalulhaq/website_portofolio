<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

use App\Http\Controllers\ContentController;

Route::get('/admin/contents', [ContentController::class, 'index'])->name('content.index');
Route::post('/admin/contents', [ContentController::class, 'update'])->name('content.update');
Route::delete('/admin/contents/{id}', [ContentController::class, 'destroy'])->name('content.destroy');

Route::resource('content', ContentController::class);

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

use App\Http\Controllers\SkillsController;

Route::get('/skills', [SkillsController::class, 'index'])->name('skills.index');

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

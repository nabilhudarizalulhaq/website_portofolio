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

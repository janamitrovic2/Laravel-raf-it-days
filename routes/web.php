<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\BlogController;
Route::get('/', [ BlogController::class,'homepage'])->name('homepage');
Route::get('/blog/{id}', [ BlogController::class,'blog'])->name('blog');


require __DIR__.'/auth.php';

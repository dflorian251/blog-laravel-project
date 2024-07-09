<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('others.index');
})->name('others.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [PostController::class, 'getAdminIndex'])->name('admin.index');
    Route::get('/create', [PostController::class, 'getAdminCreate'])->name('admin.create');
    Route::post('/create', [PostController::class, 'adminCreatePost'])->name('admin.create');
    Route::get('/edit/{id}', [PostController::class, 'getAdminEdit'] )->name('admin.edit');
    Route::post('/edit', [PostController::class, 'adminUpdatePost'])->name('admin.update');
    Route::get('/delete/{id}', [PostController::class, 'adminDeletePost'] )->name('admin.delete');
});


require __DIR__.'/auth.php';

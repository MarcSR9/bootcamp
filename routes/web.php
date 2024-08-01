<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Route::get('/dojo-kun', function () {
    return view('dojo-kun');
})->name('dojo-kun');

Route::get('/kihon', function () {
    return view('kihon');
})->name('kihon');

Route::get('/kata', function () {
    return view('kata');
})->name('kata');

Route::get('/kumite', function () {
    return view('kumite');
})->name('kumite');

Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

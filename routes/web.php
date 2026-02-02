<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('pages.index');
// });


// Route::view('/dashboard', 'dashboard.index')->name('dashboard');
// dashboard routes
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


// page routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/news', [PageController::class, 'index'])->name('news');
Route::get('/business', [PageController::class, 'business'])->name('business');
Route::get('/life-style', [PageController::class, 'life_style'])->name('life-style');
Route::get('/entertainment', [PageController::class, 'entertainment'])->name('entertainment');
Route::get('/opinion', [PageController::class, 'opinion'])->name('opinion');
Route::get('/technology', [PageController::class, 'technology'])->name('technology');
Route::get('/sports', [PageController::class, 'sports'])->name('sports');
Route::get("/upload",[PageController::class,'upload'])->name('upload');


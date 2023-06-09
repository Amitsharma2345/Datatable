<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[ProductController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('todos/{id}/edit', [ProductController::class,'edit']);
Route::post('todos/store', [ProductController::class,'store']);
Route::delete('todos/destroy/{id}',[ProductController::class,'destroy']);
Route::get('/show-detail/{id}',[ProductController::class,'show_detail'])->name('show_detail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

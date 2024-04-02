<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dishes', [DishController::class, 'index'])->name('admin.dish.index');
Route::get('/admin/dishes/create', [DishController::class, 'create'])->name('admin.dish.create');
Route::post('/admin/dishes', [DishController::class, 'store'])->name('admin.dish.store');
Route::get('/admin/dishes/dish-{dish}', [DishController::class, 'show'])->name('admin.dish.show');
Route::get('/admin/dishes/dish-{dish}/edit', [DishController::class, 'edit'])->name('admin.dish.edit');
Route::put('/admin/dishes/dish-{dish}', [DishController::class, 'update'])->name('admin.dish.update');
Route::delete('/admin/dishes/dish-{dish}', [DishController::class, 'destroy'])->name('admin.dish.destroy');


Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.category.index');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.category.store');
Route::delete('/admin/category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');


require __DIR__ . '/auth.php';

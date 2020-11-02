<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified']) ->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::redirect('/', '/recipes');

Route::resource('recipes', RecipeController::class)->only(['index','show']);

<<<<<<< HEAD
Route::resource('recipes', RecipeController::class)->only(['create','store','edit','store','update','destroy'])->middleware('auth');
=======
Route::resource('recipes', RecipeController::class)->only(['create','store','edit','store','update','destroy']) ->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });
>>>>>>> 274a80c1fc38e025043b2f50fc6dbcdf770d0a3c

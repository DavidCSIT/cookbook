<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified']) ->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::redirect('/', '/recipes');

Route::resource('recipes', RecipeController::class)->only(['index','show']);

Route::resource('recipes', RecipeController::class)->only(['create','store','edit','store','update','destroy']) ->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });

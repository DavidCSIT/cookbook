<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified']) ->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('recipes', RecipeController::class)->only(['index','show']);

Route::resource('recipes', RecipeController::class)->only(['create','store','edit','store','update','destroy']) ->middleware('auth');

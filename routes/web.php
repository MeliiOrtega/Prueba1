<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

Route::get('/', HomeController::class)->name('home'); //WELCOME

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('cursos', [CourseController::class,'index'])->name('courses.index');


Route::get('category/{category}',  [CourseController::class, 'category'])->name('course.category');


Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');



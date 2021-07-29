<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VoluntaryCourses;

//!RECORDAR INSTRUCTOR ES VOLUNTARY
//*RECORDAR INSTRUCTOR ES VOLUNTARY
Route::get('courses', VoluntaryCourses::class)->name('courses.index');
Route::redirect('', 'voluntary/courses');

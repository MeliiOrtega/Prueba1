<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VoluntaryCourses;
use App\Http\Controllers\Voluntary\CourseController;

//!RECORDAR INSTRUCTOR ES VOLUNTARY
//*RECORDAR INSTRUCTOR ES VOLUNTARY
/* Route::get('courses', VoluntaryCourses::class)->middleware('can:Leer actividad')->name('courses.index');
*/
Route::redirect('', 'voluntary/courses');

Route::resource('courses', CourseController::class)->names('courses');

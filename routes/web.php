<?php

use Illuminate\Support\Facades\Route;

use Spp\Models\Student;
use App\Http\Controllers\StudentController;

use Spp\Models\Course;
use App\Http\Controllers\CourseController;

use Spp\Models\Professor;
use App\Http\Controllers\ProfessorController;

Route::get("/", function (){
    return view("welcome");
})->name('welcome');

Route::get('students/edit/{student}',
[StudentController::class,"edit"]
)->name('students.edit');

Route::put('students/update/{student}',
[StudentController::class,"update"]
)->name('students.update');

Route::get('students/index',
[StudentController::class,"index"]
)->name('students.index');

Route::get('students/show/{student}', 
[StudentController::class, "show"]
)->name('students.show');

Route::delete("students/destroy/{student}",
[StudentController::class,"destroy"]
)->name('students.destroy');

Route::get("students/create",
[StudentController::class,"create"]
)->name('students.create');

Route::post("students/store",
[StudentController::class,"store"]
)->name('students.store');



/* course routes */

Route::get("courses/index",
[CourseController::class,'index']
)->name('courses.index');

Route::get('courses/show/{course}',
[CourseController::class,'show']
)->name('courses.show');

Route::get('courses/create',
[CourseController::class,'create']
)->name('courses.create');

Route::post('courses/store',
[CourseController::class,'store']
)->name('courses.store');

Route::get('courses/edit/{course}',
[CourseController::class,'edit']
)->name('courses.edit');

Route::put('courses/update/{course}',
[CourseController::class,'update']
)->name('courses.update');

Route::delete('courses/destroy/{course}',
[CourseController::class,'destroy']
)->name('courses.destroy');


/* Professor Routes */

Route::get('professors/index',
[ProfessorController::class, 'index']
)->name('professors.index');

Route::get('professors/show/{professor}',
[ProfessorController::class,'show']
)->name('professors.show');

Route::post('professors/store',
[ProfessorController::class, 'store']
)->name('professors.store');

Route::get('professors/create',
[ProfessorController::class, 'create']
)->name('professors.create');

Route::get('professors/edit/{professor}',
[ProfessorController::class, 'edit']
)->name('professors.edit');

Route::put('professors/update/{professor}',
[ProfessorController::class, 'update']
)->name('professors.update');

Route::delete('professors/destroy/{professor}',
[ProfessorController::class, 'destroy']
)->name('professors.destroy');


Route::resource('professors', ProfessorController::class);
Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

use app\Models\Student;
use App\Http\Controllers\StudentController;

Route::get("/", function (){
    return view("welcome");
});

Route::get('students/edit/{$student}',
[StudentController::class,"edit"]
)->name('students.edit');

Route::get('students/update/{$student}',
[StudentController::class,"update"]
)->name('students.update');

Route::get('students/index',
[StudentController::class,"index"]
)->name('students.index');

Route::get('students/show/{$student}', 
[StudentController::class, "show"]
)->name('students.show');

Route::get("students/destroy/{id}",
[StudentController::class,"destroy"]
)->name('students.destroy');

Route::get("students/create",
[StudentController::class,"create"]
)->name('students.create');

Route::get("students/store",
[StudentController::class,"store"]
)->name('students.store');


Route::get("students/trashed/",
[StudentController::class,"trashed"]
)->name('students.trashed');

Route::get("students/restore/{id}",
[StudentController::class,'restore']
)->name('students.restore');

Route::resource('students', StudentController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

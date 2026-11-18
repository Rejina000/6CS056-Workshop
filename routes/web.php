
<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Student CRUD routes
Route::resource('students', StudentController::class);

// Course CRUD routes
Route::resource('courses', CourseController::class);
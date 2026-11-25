<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Support\Facades\Route;

Route::apiResource('students', StudentController::class)->names([
    'index' => 'api.students.index',
    'store' => 'api.students.store',
    'show' => 'api.students.show',
    'update' => 'api.students.update',
    'destroy' => 'api.students.destroy',
]);

Route::apiResource('courses', CourseController::class)->names([
    'index' => 'api.courses.index',
    'store' => 'api.courses.store',
    'show' => 'api.courses.show',
    'update' => 'api.courses.update',
    'destroy' => 'api.courses.destroy',
]);
<?php

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// STUDENT CRUD



// CREATE STUDENT

// Show the student creation form
Route::get('/student/create', function () {
    return view('student.create');
});

// Save a new student
Route::post('/student', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:students,email',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    $student = Student::create($validated);

    return redirect('/students')
        ->with('success', "Student {$student->name} created successfully!");
});


// READ - LIST ALL STUDENTS

// Display all students
Route::get('/students', function () {

    $students = Student::all();

    return view('student.list', [
        'students' => $students
    ]);
});


// READ - VIEW ONE STUDENT

// Display one student
Route::get('/students/{id}', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.detail', [
        'student' => $student
    ]);
});


// UPDATE - SHOW EDIT FORM

// Show edit form
Route::get('/students/{id}/edit', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.edit', [
        'student' => $student
    ]);
});


// UPDATE - SAVE CHANGES

// Update student
Route::put('/students/{id}', function (Request $request, $id) {

    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string',
        'date_of_birth' => 'nullable|date',
    ]);

    $student->update($validated);

    return redirect('/students/' . $student->id)
        ->with('success', 'Student updated successfully!');
});


// DELETE STUDENT

Route::delete('/students/{id}', function ($id) {

    $student = Student::findOrFail($id);

    $student->delete();

    return redirect('/students')
        ->with('success', 'Student deleted successfully!');
});



// COURSE CRUD



// CREATE COURSE

// Show the course creation form
Route::get('/course/create', function () {
    return view('course.create');
});

// Save a new course
Route::post('/course', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'duration' => 'required|integer|min:1',
        'fee' => 'required|numeric|min:0',
        'difficulty' => 'required|in:Easy,Medium,Hard',
        'is_active' => 'boolean',
    ]);

    $validated['is_active'] = $request->has('is_active');

    $course = Course::create($validated);

    return redirect('/courses')
        ->with('success', "Course {$course->name} created successfully!");
});


// READ - LIST ALL COURSES

// Display all courses
Route::get('/courses', function () {

    $courses = Course::all();

    return view('course.list', [
        'courses' => $courses
    ]);
});


// READ - VIEW ONE COURSE

// Display one course
Route::get('/courses/{id}', function ($id) {

    $course = Course::findOrFail($id);

    return view('course.detail', [
        'course' => $course
    ]);
});


// UPDATE - SHOW EDIT FORM

// Show edit form
Route::get('/courses/{id}/edit', function ($id) {

    $course = Course::findOrFail($id);

    return view('course.edit', [
        'course' => $course
    ]);
});


// UPDATE - SAVE CHANGES

// Update course
Route::put('/courses/{id}', function (Request $request, $id) {

    $course = Course::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'duration' => 'required|integer|min:1',
        'fee' => 'required|numeric|min:0',
        'difficulty' => 'required|in:Easy,Medium,Hard',
        'is_active' => 'boolean',
    ]);

    $validated['is_active'] = $request->has('is_active');

    $course->update($validated);

    return redirect('/courses/' . $course->id)
        ->with('success', 'Course updated successfully!');
});


// DELETE COURSE

Route::delete('/courses/{id}', function ($id) {

    $course = Course::findOrFail($id);

    $course->delete();

    return redirect('/courses')
        ->with('success', 'Course deleted successfully!');
});
<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::all();

        return view('course.list', [
            'courses' => $courses,
        ]);
    }

    // Display the course creation form
    public function create()
    {
        return view('course.create');
    }

    // Save a new course
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $course = Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', "Course {$course->name} created successfully!");
    }

    // Display one course
    public function show(Course $course)
    {
        return view('course.detail', [
            'course' => $course,
        ]);
    }

    // Display the course edit form
    public function edit(Course $course)
    {
        return view('course.edit', [
            'course' => $course,
        ]);
    }

    // Update an existing course
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate($this->rules());

        $course->update($validated);

        return redirect()
            ->route('courses.show', $course)
            ->with('success', 'Course updated successfully!');
    }

    // Delete a course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }

    // Validation rules
    private function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ];
    }
}
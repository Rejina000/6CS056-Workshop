
@extends('layouts.app')

@section('title', 'Course Details')

@section('content')

    <h2>Course Details</h2>

    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
    <p><strong>Fee:</strong> {{ $course->fee }}</p>
    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
    <p><strong>Active:</strong> {{ $course->is_active ? 'Yes' : 'No' }}</p>

    <br>

    <div style="display: flex; gap: 10px;">

        <a href="{{ route('courses.edit', $course) }}" class="btn">
            Edit Course
        </a>

        <a href="{{ route('courses.index') }}" class="btn">
            Back to Courses
        </a>

    </div>

@endsection

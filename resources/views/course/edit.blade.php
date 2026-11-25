
@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

    <h2>Edit Course</h2>

    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')

        @include('course._form')

        <br>

        <button type="submit" class="btn">Update Course</button>
    </form>

    <br>

    <a href="{{ route('courses.index') }}" class="btn">
        Back to Courses
    </a>

@endsection
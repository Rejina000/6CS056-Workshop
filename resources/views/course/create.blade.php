
@extends('layouts.app')

@section('title', 'Create Course')

@section('content')

    <h2>Create Course</h2>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf

        @include('course._form')

        <br>

        <button type="submit">Create Course</button>
    </form>

    <br>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

@endsection
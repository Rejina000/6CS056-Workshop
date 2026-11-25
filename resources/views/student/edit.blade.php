
@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h2>Edit Student</h2>

    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('PUT')

        @include('student._form')

        <br>

        <button type="submit" class="btn">Update Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}" class="btn">
        Back to Students
    </a>

@endsection

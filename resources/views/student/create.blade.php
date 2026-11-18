
@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

    <h2>Create Student</h2>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        @include('student._form')

        <br>

        <button type="submit">Create Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students</a>

@endsection
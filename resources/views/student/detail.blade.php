
@extends('layouts.app')

@section('title', 'Student Details')

@section('content')

    <h2>Student Details</h2>

    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
    <p><strong>Age:</strong> {{ $student->age ?? 'Not provided' }}</p>

    <br>

    <div style="display: flex; gap: 10px;">

        <a href="{{ route('students.edit', $student) }}" class="btn">
            Edit Student
        </a>

        <a href="{{ route('students.index') }}" class="btn">
            Back to Students
        </a>

    </div>

@endsection

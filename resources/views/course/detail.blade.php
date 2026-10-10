<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

<h1>Course Details</h1>

<p>
    <strong>Name:</strong>
    {{ $course->name }}
</p>

<p>
    <strong>Description:</strong>
    {{ $course->description ?? 'No description provided' }}
</p>

<p>
    <strong>Duration:</strong>
    {{ $course->duration }}
</p>

<p>
    <strong>Fee:</strong>
    {{ $course->fee }}
</p>

<p>
    <strong>Difficulty:</strong>
    {{ $course->difficulty }}
</p>

<p>
    <strong>Status:</strong>
    {{ $course->is_active ? 'Active' : 'Inactive' }}
</p>

<br>

<a href="/courses/{{ $course->id }}/edit">Edit Course</a>

<br><br>

<a href="/courses">Back to Courses</a>

</body>
</html>
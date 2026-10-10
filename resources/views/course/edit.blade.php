<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

<h1>Edit Course</h1>

<form action="/courses/{{ $course->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name', $course->name) }}" required>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Description:</label>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Duration:</label>
        <input type="number" name="duration"
               value="{{ old('duration', $course->duration) }}"
               min="1" required>

        @error('duration')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Fee:</label>
        <input type="number" name="fee"
               value="{{ old('fee', $course->fee) }}"
               min="0" step="0.01" required>

        @error('fee')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Difficulty:</label>

        <select name="difficulty" required>
            <option value="Easy" {{ $course->difficulty == 'Easy' ? 'selected' : '' }}>
                Easy
            </option>

            <option value="Medium" {{ $course->difficulty == 'Medium' ? 'selected' : '' }}>
                Medium
            </option>

            <option value="Hard" {{ $course->difficulty == 'Hard' ? 'selected' : '' }}>
                Hard
            </option>
        </select>

        @error('difficulty')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>
            <input type="checkbox"
                   name="is_active"
                   value="1"
                   {{ $course->is_active ? 'checked' : '' }}>
            Active
        </label>
    </div>

    <br>

    <button type="submit">Update Course</button>

</form>

<br>

<a href="/courses/{{ $course->id }}">Cancel</a>

</body>
</html>
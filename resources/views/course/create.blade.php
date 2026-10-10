<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

<h1>Create Course</h1>

<form action="/course" method="POST">
    @csrf

    <div>
        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Duration:</label>
        <input type="number" name="duration" value="{{ old('duration') }}" min="1" required>
        
        @error('duration')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Fee:</label>
        <input type="number" name="fee" value="{{ old('fee') }}" min="0" step="0.01" required>
        
        @error('fee')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Difficulty:</label>

        <select name="difficulty" required>
            <option value="">Select Difficulty</option>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
        </select>

        @error('difficulty')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1" checked>
            Active
        </label>
    </div>

    <br>

    <button type="submit">Create Course</button>

</form>

<br>

<a href="/courses">Back to Courses</a>

</body>
</html>
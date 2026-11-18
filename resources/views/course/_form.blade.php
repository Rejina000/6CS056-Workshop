
<x-form-input
    name="name"
    label="Course Name"
    :value="$course->name ?? ''"
    required
/>

<x-form-textarea
    name="description"
    label="Description"
    :value="$course->description ?? ''"
/>

<x-form-input
    name="duration"
    label="Duration (weeks)"
    type="number"
    :value="$course->duration ?? ''"
    min="1"
    required
/>

<x-form-input
    name="fee"
    label="Fee"
    type="number"
    :value="$course->fee ?? ''"
    min="0"
    step="0.01"
    required
/>

<div>
    <label for="difficulty">Difficulty:</label>

    <select id="difficulty" name="difficulty" required>
        <option value="">Select Difficulty</option>

        <option value="Easy" @selected(old('difficulty', $course->difficulty ?? '') === 'Easy')>
            Easy
        </option>

        <option value="Medium" @selected(old('difficulty', $course->difficulty ?? '') === 'Medium')>
            Medium
        </option>

        <option value="Hard" @selected(old('difficulty', $course->difficulty ?? '') === 'Hard')>
            Hard
        </option>
    </select>

    @error('difficulty')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>

<div>
    <input type="hidden" name="is_active" value="0">

    <label for="is_active">Active:</label>

    <input
        type="checkbox"
        id="is_active"
        name="is_active"
        value="1"
        @checked((bool) old('is_active', $course->is_active ?? true))
    >
    
    @error('is_active')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>
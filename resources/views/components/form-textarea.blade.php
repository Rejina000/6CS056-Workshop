
<div>
    <label for="{{ $name }}">{{ $label }}:</label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes }}
    >{{ old($name, $value ?? '') }}</textarea>

    @error($name)
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>
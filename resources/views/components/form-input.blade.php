
<div>
    <label for="{{ $name }}">{{ $label }}:</label>

    <input
        type="{{ $type ?? 'text' }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value ?? '') }}"
        {{ $attributes }}
    >

    @error($name)
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>
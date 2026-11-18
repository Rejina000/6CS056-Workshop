
@if($type === 'success')
    <div style="color: green; padding: 10px; border: 1px solid green;">
        {{ $message }}
    </div>
@elseif($type === 'error')
    <div style="color: red; padding: 10px; border: 1px solid red;">
        {{ $message }}
    </div>
@endif

<form
    method="POST"
    action="{{ $action }}"
    style="display: inline;"
    onsubmit="return confirm('Are you sure you want to delete this record?');"
>
    @csrf
    @method('DELETE')

   <button type="submit" class="btn">Delete</button>
</form>
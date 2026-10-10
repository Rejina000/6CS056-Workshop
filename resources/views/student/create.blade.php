<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Create Student</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/student">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input
                type="text"
                id="phone"
                name="phone"
                value="{{ old('phone') }}"
            >
        </div>

        <div>
            <label for="address">Address:</label>
            <textarea
                id="address"
                name="address"
            >{{ old('address') }}</textarea>
        </div>

        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
            >
        </div>

        <button type="submit">Create Student</button>
    </form>

</body>
</html>
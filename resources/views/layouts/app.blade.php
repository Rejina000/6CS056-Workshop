
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Student Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <h1>Student Management System</h1>
    </header>

    @include('partials.navbar')

    <hr>

    <main>
        @if(session('success'))
    <x-alert type="success" :message="session('success')" />
    <br>
@endif

@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
    <br>
@endif

        @yield('content')
    </main>

    <hr>

   @include('partials.footer')

</body>
</html>
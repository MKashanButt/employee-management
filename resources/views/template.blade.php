<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Database</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('css')
</head>

<body>
    <main>
        @if (Auth::user()->role == 'admin')
            <x-admin-sidebar />
        @else
            <x-sidebar />
        @endif
        @yield('content')
    </main>
    @stack('js')

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partial._head');
</head>
<body>
    <div id="app">
        @include('partial._nav');
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

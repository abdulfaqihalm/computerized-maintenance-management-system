<!DOCTYPE html
><html lang="en">
<head>
    @include('partial._head')
    @yield('stylesheets')
</head>
<body>

    <div class="container-fluid">
        @include('partial._nav')
        @yield('content')
        @include('partial._footer')
    </div>

    @include('partial._javascripts')
    @yield('scripts')

</body>
</html>

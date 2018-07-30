<!DOCTYPE html
><html lang="en">
<head>
    @include('partial._head');
</head>
<body>
    
    <div class="container-fluid">
        @include('partial._nav');
            @yield('content')
        @include('partial._footer');
    </div>

    @yield('scripts')

</body>
</html>

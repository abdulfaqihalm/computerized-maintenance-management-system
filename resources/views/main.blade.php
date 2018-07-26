<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partial._head')
    </head>

    <body>
        
        @include('partial._nav')

        <div class="container">
            @include('partial._messages')
            
            @yield('content')

            @include('partial._footer')
        </div> <!-- End of container-->
        
        @include('partial._javascripts')

        @yield('scripts')
    </body>
</html>



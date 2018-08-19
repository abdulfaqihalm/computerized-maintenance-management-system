<nav class="row">
    <div class="col-md-12">
        <div class="navbar navbar-expand-md navbar-dark fixed-top shadow">
<<<<<<< HEAD
            <a class="navbar-brand" href="/home">
                {{--<img src="{{url('/images/logo-kotak.png')}}" height="35" class="pr-2"/>--}}
                CMMS
=======
            <a class="navbar-brand" href="#">
                <img src="{{url('/images/logo-kotak.png')}}" height="35" class="pr-2"/>
                SMU CMMS
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{Request::is('/home') ? "active" : ""}}">
<<<<<<< HEAD
                        <a class="nav-link" href="/home">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    @if(Auth::user()->hasRole(['Admin', 'Engineer', 'Site', 'Logistic']))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Order
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->hasRole('Site'))
                                    <a class="dropdown-item" href="{{route('request.index')}}">Request</a>
                                @elseif(Auth::user()->hasRole('Engineer'))
                                    <a class="dropdown-item" href="{{route('request.index')}}">Request</a>
                                    <a class="dropdown-item" href="{{route('work-order-detail.index')}}">Work Order</a>
                                @elseif(Auth::user()->hasRole('Logistic'))
                                    <a class="dropdown-item" href="{{route('purchase-order.index')}}">Purchase Order</a>
                                @elseif(Auth::user()->hasRole('Admin'))
                                    <a class="dropdown-item" href="{{route('request.index')}}">Request</a>
                                    <a class="dropdown-item" href="{{route('work-order-detail.index')}}">Work Order</a>
                                    <a class="dropdown-item" href="{{route('purchase-order.index')}}">Purchase Order</a>
                                @endif
                            </div>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('Admin'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true">
                                Assets
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('hospital.index')}}">Hospital</a>
                            <a class="dropdown-item" href="{{route('modality.index')}}">Modality</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('part.index')}}">Parts</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true">
                                People
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('user.index')}}">Users</a>
                            <a class="dropdown-item" href="{{route('role.index')}}">Roles</a>
                            </div>
                        </li>
                    @endif()
=======
                        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Order
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('request.index')}}">Request</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('workordersdetail.index')}}">Work Order</a>
                        <a class="dropdown-item" href="{{route('purchaseorder.index')}}">Purchase Order</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true">
                            Assets
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('site.index')}}">Sites</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('part.index')}}">Parts</a>
                            <a class="dropdown-item" href="#">Inventory</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">People</a>
                    </li>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                </ul>
                @endauth
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
<<<<<<< HEAD
=======
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register.user') }}">{{ __('Register') }}</a>
                            </li>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <button class="btn btn-outline-light">{{ Auth::user()->name }} <span class="caret"></span></button>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </div>
</nav>

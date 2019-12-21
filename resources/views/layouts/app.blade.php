<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="app-navbar-collapse">

                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    {{-- Search Bar --}}
                        <div class="col-lg-7">
                            {{-- {!! Form::open(['action' => '/search', 'method' => 'POST', 'role' => 'search', 'class' => 'input-group input-group-lg']) !!} --}}
                            <form action="/search" method="POST" role="search" class="input-group input-group-lg">
                                {{ csrf_field() }}
                                <span class="input-group-btn">
                                    <select id="category" name="category" class="btn btn-default btn-lg">  
                                        <option value = "All">All</option>
                                        <option value = "Traders">Traders</option>
                                        <option value = "Fashion">Fashion</option>
                                        <option value = "Entertainment">Entertainment</option>
                                        <option value = "Appliances">Appliances</option>
                                        <option value = "Hobbies">Hobbies</option>
                                    </select>
                                </span>
                                <input type="text" class="form-control input-lg" id="search" placeholder="Search categories, traders, users" name="search">
                                <span class="input-group-btn">
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Submit', ['class' => 'btn btn-default btn-lg'])}}
                                 {{-- <button class="btn btn-default btn-lg" type="submit">Search</button> --}}
                               </span> 
                            <form>
                           {{-- {!! Form::close() !!}     --}}
                       </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="/new_trade" class="btn btn-default btn-lg">New Trade</a></li>
                            <li><img style="width:75px"src="/storage/profile_images/{{Auth::user()->profile_image}}" class="img-circle col-md-2"></li>
                            {{-- Dropdown Selection --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/profile/{{Auth::user()->id}}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="\wishlist">
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="\mytrades">
                                            My Trades
                                        </a>
                                    </li>
                                    <li>
                                        <a href="\settings">
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

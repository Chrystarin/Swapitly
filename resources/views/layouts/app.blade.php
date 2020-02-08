<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Website Icon --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.scss') }}" rel="stylesheet">
    
</head>
<body>
    <header>
		<nav>
			<div id="NavHolder">
				<a href="{{ url('/') }}"><img src="/storage/images/png/Logo Name.png" alt=""></a>
				<div id="NavSearch"> 
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
						<input type="text" name="search" id="search">
						<button type="submit"><img src="/storage/images/png/Search.png" alt=""></button>
                    </form>

				</div>
				<div id="NavStat">
					<div id="NavStat_P1">
						<div>
							<a href="#">Help</a>
						</div>
						<div>
							<a href="#">Terms & Condition</a>
							<a href="#">About</a>
						</div>
						<div>
							<a href="#"><img src="/storage/images/png/Message.png" alt=""></a>
							<a href="#"><img src="/storage/images/png/Message.png" alt=""></a>
							<a href="#"><img src="/storage/images/png/Message.png" alt=""></a>
						</div>
						
						
					</div>
					<div id="NavStat_P2">

                        <div id="NotRegis">
							<a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
						</div>	
						<div id="Registered">
							<a href="#">Trade now</a>
							<a href="#">
								<img src="/storage/images/png/Heart.png" alt="">
							</a>
							<a href="#">
								<img src="/storage/images/png/Notification.png" alt="">
							</a>
							<ul id="menu">
								<a href="#">
									<li><span>UserName</span>
										<ul>
											<li>qweq</li>
										</ul>
									</li>
								</a>
                            </ul>
                        </div>	
                        
                        <!--Code block for changing layout based on user logged in-->
                        {{-- 
                        <!--Guest User-->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        
                        <!--Registered User-->
                        @else
                            <li><a href="/products/create" class="btn btn-default btn-lg">Trade Now</a></li>
                            <li>&nbsp;</li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <div class="row"> 
                                        {{ Auth::user()->first_name }} 
                                        <img style="width:30px"src="/storage/profile_images/{{Auth::user()->profile_image}}" class="img-circle">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/profile/{{Auth::user()->id}}">Profile</a></li>
                                    <li><a href="\products\user">My Trades</a></li>
                                    <li><a href="\favorites">Favorites</a></li>
                                    <li><a href="\settings">Settings</a></li>
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
                                    <li><a href="\help">Help</a></li>
                                </ul>
                            </li>
                        @endif --}}

					</div>
				</div>
			</div>
		</nav>
    </header>
    
    <div id="app">
        {{-- <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a  href="{{ url('/') }}">
                        <img class="navbar-brand" src="/storage/images/swapitly_logo.png">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                        <div class="col-lg-7">
                            <form action="/search" method="POST" role="search" class="input-group input-group-lg">
                                {{ csrf_field() }}
                                <input type="text" class="form-control input-lg" id="search" placeholder="Search traders and items" name="search">
                                <span class="input-group-btn">
                                 <button class="btn btn-default btn-lg" type="submit">Search</button>
                               </span> 
                            </form>
                       </div>
                       
                    <ul class="nav navbar-nav navbar-right">
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="/products/create" class="btn btn-default btn-lg">Trade Now</a></li>
                            <li>&nbsp;</li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <div class="row"> 
                                        {{ Auth::user()->first_name }} 
                                        <img style="width:30px"src="/storage/profile_images/{{Auth::user()->profile_image}}" class="img-circle">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/profile/{{Auth::user()->id}}">Profile</a></li>
                                    <li><a href="\products\user">My Trades</a></li>
                                    <li><a href="\favorites">Favorites</a></li>
                                    <li><a href="\settings">Settings</a></li>
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
                                    <li><a href="\help">Help</a></li>
                                </ul>
                            </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <p id="wew">wew</p> --}}
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

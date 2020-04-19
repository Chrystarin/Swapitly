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
<<<<<<< HEAD
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="css/new.css" rel="stylesheet">
    {{-- Javascript --}}
    <script src="js/jquery.js"></script>
    <script src="js/tr1.js"></script>

=======
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
>>>>>>> parent of 00e8776... SCSS FIXED
    
</head>
<body>
    <header>
<<<<<<< HEAD
		@include('inc.navbar')
=======
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
                        <!--Code block for changing layout based on user logged in-->
                        
                        <!--Guest User-->
                        @if (Auth::guest())
                            <div>
								<a href="{{ route('login') }}">Log in</a>
								<a href="{{ route('register') }}">Sign up</a>
							</div>	
                        
                        <!--Registered User-->
                        @else
                            <div id="Registered">
								<a href="#">Trade now</a>
								
								<div id="Img-But">
									<a href="#" id="Heart"><img src="/storage/images/png/Heart.png" alt=""></a>
									<ul>
										<li id="Notification-holder">
											<img id="Notification" src="/storage/images/png/Notification.png" alt="">
											<ul id="Notification-DropDown">
												<div id="Notification-DropDown-header">
													<p onclick="wew(this)">Notification</p>
													<span>5</span>
													<a href="#">All</a>
													<a href="#" >Request</a>

												</div>
												<div id="ListOfNotif">
													<a href="#" class="Notif-Lists" data-Type="Request">
														<li>
															<img src="image/received_393147958055492.jpeg" alt="">
															<div class="NotifContent">
																<p><span class="SenderName">Dianne Chrystalin M. Brandez</span c> Sent a trade Request( <span>Moshie's Love</span> - <span>Wife's Love</span> )</p>
																<p class="Date">Oct 10</p>
															</div>
														</li>	
													</a>
													<a href="#" class="Notif-Lists" data-Type="Request">
														<li>
															<img src="image/received_393147958055492.jpeg" alt="">
															<div class="NotifContent">
																<p><span class="SenderName">Dianne Chrystalin M. Brandez</span c> Sent a trade Request( <span>Moshie's Love</span> - <span>Wife's Love</span> )</p>
																<p class="Date">Oct 10</p>
															</div>
														</li>	
													</a>
													<a href="#" class="Notif-Lists" data-Type="Request">
														<li>
															<img src="image/received_393147958055492.jpeg" alt="">
															<div class="NotifContent">
																<p><span class="SenderName">Dianne Chrystalin M. Brandez</span c> Sent a trade Request( <span>Moshie's Love</span> - <span>Wife's Love</span> )</p>
																<p class="Date">Oct 10</p>
															</div>
														</li>	
													</a>
													<a href="#" class="Notif-Lists" data-Type="Request">
														<li>
															<img src="image/received_393147958055492.jpeg" alt="">
															<div class="NotifContent">
																<p><span class="SenderName">Dianne Chrystalin M. Brandez</span c> Sent a trade Request( <span>Moshie's Love</span> - <span>Wife's Love</span> )</p>
																<p class="Date">Oct 10</p>
															</div>
														</li>	
													</a>
												</div>
												<div>
													<a href="#">Mark as all read</a>
												</div>
												
											</ul>
										</li>
									</ul>
								</div>
								<ul id="menu">
									<li>
										<a href="#">
											<span id="UserName">{{ Auth::user()->first_name }} </span>
											<img src="/storage/profile_images/{{Auth::user()->profile_image}}" alt="">
											<img src="image/png/menuMore.png" alt="">
										</a>
										<ul id="menuDropDown">
											<li><a href="/profile/{{Auth::user()->id}}">Profile</a></li>
											<li><a href="#">My Account</a></li>
											<li><a href="\products\user">My Trades</a></li>
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
										</ul>
									</li>
								</ul>
							</div>
                        @endif

					</div>
				</div>
			</div>
		</nav>
>>>>>>> parent of 00e8776... SCSS FIXED
    </header>
    @include('inc.module')
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

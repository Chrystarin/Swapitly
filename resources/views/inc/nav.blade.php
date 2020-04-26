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
                    <div id="NotRegis">
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
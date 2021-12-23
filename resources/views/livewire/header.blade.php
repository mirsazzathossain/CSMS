<header id="header" class="topbar-dark header-dark">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-xs-12">
                    <div class="topbar-left text-lg-left text-center">
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-envelope"> </i>
                                test@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                tel: (+880) 123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xs-12 text-lg-right text-center">
                    <div class="topbar-profile">
                        <ul class="list-inline">
                            <li>
                                @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        Log Out
                                    </a>
                                </form>
                                @else
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> 
                                    login
                                </a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{route('home')}}">
                                    CSMS
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-links float-right">
                                <li class="{{ request()->routeIs('home') ? 'active':'' }}">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('about-us') ? 'active':'' }}">
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li class="{{ request()->routeIs('cars.index') ? 'active':'' }}">
                                    <a href="{{route('cars.index')}}">Cars List</a>
                                </li>
                                <li class="{{ request()->routeIs('contact-us') ? 'active':'' }}">
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                                @auth
                                <li>
                                    <a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>

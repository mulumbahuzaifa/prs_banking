<div>
    <!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="luvion-responsive-nav">
        <div class="container">
            <div class="luvion-responsive-menu">
                <div class="logo">
                    <a href="index-4.html">
                        <img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="70">
                        <img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="70">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="luvion-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-4.html">
                    <img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="90">
                    <img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="70">
                </a>
                @php
                    $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                    $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                @endphp
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link {{ $current_page == '' ? 'active': '' }}">Home</a></li>

                        <li class="nav-item"><a href="{{ route('service') }}" class="nav-link {{ $current_page == 'services' ? 'active': '' }}">Services <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                <li class="nav-item"><a href="{{ route('service.detail',['slug' =>$category->slug]) }}" class="nav-link">{{ $category->name }}</a></li>
                                @endforeach
                                <li class="nav-item"><a href="#" class="nav-link">Investment</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Customer Support</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Tips For Your Bussiness</a></li>

                            </ul>
                        </li>

                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ $current_page == 'about-us' ? 'active': '' }}">About Us</a></li>

                        <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link {{ $current_page == 'blogs' ? 'active': '' }}">Blog</a></li>

                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ $current_page == 'contact-us' ? 'active': '' }}">Contact Us</a></li>

                        @if (Route::has('login'))
                        @auth
                        @if (Auth::user()->utype === 'ADM')
                        <li class="nav-item dropdown">
                            <a class=" nav-link dropdown-toggle collapsed {{ $current_page == 'login' ? 'active': '' }}" href="#"  aria-label="Toggle navigation"><i class="flaticon-user"></i> My Account ({{ Auth::user()->name }})</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item" >
                                    <a title="Categories" href="{{ route('admin.categories') }}">Service Categories</a>
                                </li>
                                <li class="nav-item" >
                                    <a title="projects" href="{{ route('admin.services') }}">Services</a>
                                </li>

                                <li class="nav-item" >
                                    <a title="Orders" href="{{ route('admin.blogs') }}">Blogs</a>
                                </li>

                                <li class="nav-item" >
                                    <a title="Conatct Messages" href="{{ route('admin.contact') }}">Conatct Messages</a>
                                </li>

                                <li class="nav-item" >
                                    <a title="Settings" href="{{ route('admin.settings') }}">Settings</a>
                                </li>
                                <li class="nav-item" >
                                    <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                                </li>
                                <li class="nav-item" >
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf

                                </form>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class=" nav-link dropdown-toggle collapsed" href="#"  aria-label="Toggle navigation"><i class="flaticon-user"></i> My Account ({{ Auth::user()->name }})</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item" >
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf

                                </form>
                            </ul>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown  others-options">
                            <a class=" nav-link dropdown-toggle collapsed login-btn" href="{{ route('login') }}"  aria-label="Toggle navigation"><i class="flaticon-user"></i> LOGIN</a>
                            <ul class="dropdown-menu" id="submenu-1-1">
                                <li class="nav-item"><a href="{{ route('login') }}"></i>Login</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </li>
                        @endauth
                        @endif
                    </ul>

                    {{-- <div class="others-options">

                        <a href="login.html" class="login-btn"><i class="flaticon-user"></i> Log In</a>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
</div>

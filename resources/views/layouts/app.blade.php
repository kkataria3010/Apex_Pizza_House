<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app1.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    {{-- <link href="{{ asset('css/style2.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="home" class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="{{ asset('resources/images/apex-logo.png') }}" style="width:100%">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="{{ asset('resources/icons/cart-dark.svg') }}" alt="">
                        <a href="/cart">0 Items - (Rs 0)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="/#home">Home</a>
                        </li>
                        <li>
                            <a href="/#about">About us</a>
                        </li>
                        <li>
                            <a href="/menu">Menu</a>
                        </li>
                        <li>
                            <a href="/#services">Services</a>
                        </li>
                        <li>
                            <a href="/#booktable">Ask Query</a>
                        </li>
                        <li>
                            <a href="/#contact">Contact us</a>
                        </li>
                        <li>
                            <a href="#">Log in</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="error">ERROR</div>
                <div class="contact flex items-center">
                    <img src="{{ asset('resources/icons/phone.svg') }}" alt="">
                    <div>
                        <h5>Call us: (+84) 123 456 789</h5>
                        <h6>E-mail : support@freshmeal.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="{{ asset('resources/icons/clock.svg') }}" alt="">
                    <div>
                        <h5>Opening Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="#"><img src="{{ asset('resources/icons/facebook.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('resources/icons/twitter.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('resources/icons/google.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('resources/icons/instagram.svg') }}" alt=""></a>
                        </div>
                        <div class="auth flex items-center">
                            <!-- Authentication Links -->
                            @guest
                                <div>
                                  <img src="{{ asset('resources/icons/user-icon.svg') }}" alt="">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                                <span class="divider">|</span>
                                @if (Route::has('register'))
                                    <div>
                                        <img src="{{ asset('resources/icons/edit.svg') }}" alt="">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </div>
                                    
                                @endif
                            
                            @else
                                <div>
                                    <img src="{{ asset('resources/icons/user-icon.svg') }}" alt="">
                                    {{ Auth::user()->name }}
                                </div>
                                <span class="divider">|</span>
                                @if(Auth::user()->email=="admin@apexpizza.in")
                                    <div>
                                        <a class="nav-link" href="/pendingorders">Pending Orders</a>
                                    </div>
                                    <span class="divider">|</span>
                                    <div>
                                        <a class="nav-link" href="/cancelledorders">Cancelled Orders</a>
                                    </div>
                                    <span class="divider">|</span>
                                    <div>
                                        <a class="nav-link" href="/deliveredorders">Delivered Orders</a>
                                    </div>
                                    <span class="divider">|</span>
                                @else
                                    <div>
                                        <a class="nav-link" href="/account">Account</a>
                                    </div>
                                    <span class="divider">|</span>
                                    <div>
                                        <a class="nav-link" href="/orders">Orders</a>
                                    </div> 
                                    <span class="divider">|</span>      
                                    <div>
                                        <img src="{{ asset('resources/icons/cart.svg') }}" alt="">
                                    <a href="/cart"><span id="cart-items-count">{{$total ?? ''}}</span> Items - (Rs.<span id="cart-items-price">{{$price ?? ''}}</span>)</a>
                                    </div>
                                    <span class="divider">|</span>
                                @endif
                                <div>
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            
                                @endguest
                        </div>
                    </div>
                </header>
                {{-- @include('messages') --}}
                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="{{ asset('resources/icons/phone.svg') }}" alt="">
                                <div>
                                    <h5>Call US: (+91) 123 456 7891</h5>
                                    <h6>E-mail : support@apexpizza.com</h6>
                                </div>
                            </div>
                            <div class="branding flex justify-center items-center">
                                <img src="{{ asset('resources/images/apex-logo.png') }}" alt="" style="width:50%">
                            </div>
                            <div class="time flex items-center">
                                <img src="{{ asset('resources/icons/clock.svg') }}" alt="">
                                <div>
                                    <h5>Opening Hours:</h5>
                                    <h6>Mon - Sun (10.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="/#home" class="active">Home</a>
                            <a href="/#about">About us</a>
                            <a href="/menu">Menu</a>
                            <a href="/#services">Services</a>
                            {{-- <a href="/#askquery">Ask Query</a> --}}
                            <a href="/#contact">Contact us</a>
                        </div>
                    </div>
                </nav>



@yield('content')
<footer>
    <div class="container">
        <div class="box">
            <h3>About us</h3>
            <p>We are serving Ahmedabad with exquisite Italian Dishes since 2005. Apex Pizza House has been ranked first in Ahmedabad Best FastFood Restaurant in 2016 & 2017.</p>
            {{-- <button class="btn btn-secondary">Read More</button> --}}
        </div>
        <div class="box">
            <h3>Quik Links</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/#about">About us</a>
                </li>
                <li>
                    <a href="/menu">Menu</a>
                </li>
                <li>
                    <a href="/#services">Services</a>
                </li>
                {{-- <li>
                    <a href="/#query">Ask Query</a>
                </li> --}}
                <li>
                    <a href="/#contact">Contact us</a>
                </li>

            </ul>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <div>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/">
                            <img src="{{ asset('resources/icons/facebook.svg') }}" alt="">
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/">
                            <img src="{{ asset('resources/icons/twitter.svg') }}" alt="">
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.googleplus.com/">
                            <img src="{{ asset('resources/icons/google.svg') }}" alt="">
                            <span>Google +</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <img src="{{ asset('resources/icons/instagram.svg') }}" alt="">
                            <span>Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box instagram-api">
            <h3>Instagram</h3>
            <div class="post-wrap">
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('resources/images/food-table.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="copyright">
    <div>
        Copyright © 2020 .All rights reserved by <a href="">Apex</a>.
    </div>
</footer>
</div>
</div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>RealEstate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- navbar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800,%20700" rel="stylesheet">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.default.css">

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/aos2.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/colors/dark-orange.css">
    <link rel="stylesheet" id="color" href="css/default.css">
    <link rel="stylesheet" href="css/maps.css">
    <link rel="stylesheet" id="color" href="css/colors/pink.css">
    <link rel="stylesheet" href="css/home.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<!-- START SECTION HEADINGS -->
<!-- Header Container
        ================================================== -->
<header id="header-container">
    <!-- Header -->
    <div id="header">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="/"><img src="images/logo.png" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="/property">Property</a>
                            <ul>
                                <li><a href="/forrent">For Rent</a></li>
                                <li><a href="/forsale">For Sale</a></li>
                                <li><a href="/vacationrental">Vacation Rental</a></li>
                            </ul>
                        </li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/agent">Agent</a></li>
                        <li><a href="/agent/dashboard">CRM</a></li>
                        <li><a href="/contact">Contact</a></li>     
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                                <!-- Header Widget -->
                                <div class="header-widget sign-in">
                                    <div><a href="{{ route('login') }}">Sign In</a></div>
                                </div>
                                <!-- Header Widget / End -->
                            </div>
                            @endif
                        @else
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}@auth
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            <div class="header-user-menu user-menu add">
                                <div class="header-user-name">
                                    <span><img src="images/testimonials/ts-1.jpg" alt=""></span>
                                    
                                        {{ Auth::user()->name }}
                                </div>
                                <ul>
                                    <li><a href="user-profile.html"> Edit profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                            <!-- Right Side Content / End -->
                        @endguest
        </div>
    </div>

    <!-- Header / End -->

</header>
</div>
<div class="clearfix"></div>
<!-- Header Container / End --> 
<!-- ARCHIVES JS -->
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet-gesture-handling.min.js"></script>
    <script src="js/leaflet-providers.js"></script>
    <script src="js/leaflet.markercluster.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/map-style2.js"></script>
    <script src="js/map4.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/aos2.js"></script>
    <script src="js/nice-select.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fitvids.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/counterup.js"></script>
    <script src="js/inner.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/forms-2.js"></script>
    <script src="js/color-switcher.js"></script>

    @yield('content')

<footer>
    <div class="row primary">
        <div class="column about">
            <h3>Real Estate</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                voluptatem corporis error non,
            </p>
            <div class="social">
                <i class="fa-brands fa-facebook-square" ></i>
                <i class="fa-brands fa-instagram-square" style="color:rgb(184, 32, 32);"></i>
                <i class="fa-brands fa-twitter-square"></i>
                <i class="fa-brands fa-youtube-square" style="color:rgb(214, 30, 30);"></i>
                <i class="fa-brands fa-whatsapp-square"></i>
            </div>
        </div>
        <div class="column links">
            <h3>Useful Link</h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Resgister</a></li>
                <li><a href="/service">Our Service</a></li>
            </ul>
        </div>
        <div class="column links">
            <h3>Support Link</h3>
            <ul>
                <li><a href="/faq">F.A.Q</a></li>
                <li><a href="/help">Help</a></li>
                <li><a href="/term">Terms & conditions</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
</html>
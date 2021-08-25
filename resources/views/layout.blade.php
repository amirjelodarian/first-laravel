@inject('userStatus','App\Models\User')
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>


</head>
<body>

<!-- Header Start -->
<header id="home">

    <!-- Main Menu Start -->
    <div class="main-menu">
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="#" class="navbar-brand"><img src="/img/logo.png" alt="Logo" /></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right main-navbar">
                            <li><a href="#about">درباره ما</a></li>
                            <li><a href="#contact-us">ارتباط با ما</a></li>
                            <li><a href="#faq">سوالات متداول</a></li>
                            <li><a href="#blog">بلاگ</a></li>
                            <li><a href="#features">خدمات ما</a></li>
                            @guest
                                <li>
                                    <a class="login-register-a" href="{{ URL::route('register') }}">ثبت نام</a>
                                    <span class="login-register-a">/</span>
                                    <a class="login-register-a" href="{{ URL::route('login') }}">ورود</a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item dropdown">
                                    @if($userStatus::verified())
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->firstname }}
                                        </a>
                                    @else
                                        <a id="navbarDropdown" class="nav-link text-warning" href="{{ route('verify') }}" role="button">
                                            تایید حساب
                                        </a>
                                    @endif
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endauth
                            <li><a href="{{ route('home') }}">خانه</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu End -->


<!-- Sider Start -->
    <div class="slider">
        @yield('slider')
    </div>
    <!-- Sider End -->

</header>
<!-- Header End -->
@include('flash')
@yield('main')

<!-- footer -->

<footer>
    <div class="container">
        <div class="row">

            <!-- Single Footer -->
            <div class="col-sm-3">
                <div class="single-footer">
                    <div class="footer-logo">
                        <img src="/img/footer-logo.png" alt="Footer Logo" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut .</p>
                    </div>
                </div>
            </div>
            <!-- Single Footer -->


            <!-- Single Footer -->
            <div class="col-sm-3">
                <div class="single-footer">
                    <h4>Keep In Touch</h4>
                    <p>44 New Design Street, Melbourne 005 <br />
                        +1 (123) 456-7890-321 <br />
                        info@weburl.com <br />
                        (01) 800 854 633</p>
                </div>
            </div>
            <!-- Single Footer -->


            <!-- Single Footer -->
            <div class="col-sm-3">
                <div class="single-footer">
                    <h4>Suscribe</h4>
                    <p>Enter your Email Address For Subscirbe Our Monthly Newsletters</p>

                    <form action="">
                        <div class="form-group">
                            <input type="email" class="form-control my-form" id="exampleInputEmail1" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-subscribe">Subscirbe</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Single Footer -->

            <!-- Single Footer -->
            <div class="col-sm-3">
                <div class="single-footer">
                    <h4>Recent Projects</h4>
                    <ul class="projects">
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                        <li><img src="/img/project.png" alt="Reccent Project" /></li>
                    </ul>
                </div>
            </div>
            <!-- Single Footer -->

        </div>
    </div>

</footer>

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="copy-text">
                    <p>All Rights Reserved | Copyright 2016 © The Bizium template by pFind's Goodies</p>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="footer-menu pull-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing');
        });
    });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>


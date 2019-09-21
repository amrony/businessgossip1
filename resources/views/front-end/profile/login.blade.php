<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<!-- Mirrored from ledthanhdat.vn/cemeriss/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 10:40:17 GMT -->
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('back-end/images') }}/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back-end/css/bootstrap.css')  }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/mercury.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-fb-comment-box.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/style.css') }}">
</head>
<body id="about_s">
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap ab_nav">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                     data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
                    <div class="rd-navbar-aside">
                        <ul class="social-links">
                            <li  style="color: black;">
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="{{ url('/') }}">
                                        <img class="brand-logo-dark" src="{{ url('storage/company',$company->logo) }}"
                                             alt="img"/>
{{--                                        <img class="brand-logo-light" src="{{ asset('back-end/images') }}/logo-inverse-162x34.png" alt="img"/>--}}
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline navbar-contact-list">
                            <li>
                                <div class="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2"
                                            data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                    <form class="rd-search" action="http://ledthanhdat.vn/cemeriss/search-results.html"
                                          data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                            <input class="rd-navbar-search-form-input form-input"
                                                   id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                        </div>
                                        <button class="rd-search-form-submit fa fa-search" type="submit"></button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div><p>LOGIN</p></div>
                            </li>
                            <li>
                                <div><p>JOIN FOR FREE</p></div>
                            </li>
                            <li>
                                <ul class="social-links">
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-linkedin" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-instagram" href="#"></a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->

                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index-2.html">Business Basics</a>
                                    </li>

                                    <li class="rd-nav-item nav"><a class="rd-nav-link" href="about.html">Career</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                                                                    </li> -->
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Finance</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="single-service.html">Single service</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Human Resources</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Marketing</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Technology</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-search">
                            <ul class="nav_one">
                                <li><a href="">Expert Advice</a></li>
                            </ul>
                            <ul class="nav_one">
                                <li><a href="">Free Report Card</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section id="sec_two" class="section section-intro context-dark">
        <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <h1 class="font-weight-bold wow fadeInLeft">Login To Business</h1>
                    <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
                </div>
            </div>
        </div>
    </section>
    <br><br>



    <section class="section position-relative">
        <div class="contacts-custom-wrap">
            <div class="container">
                <div class="row justify-content-lg-start justify-content-center">
                    <div class="col-xl-6 col-sm-12 col-md-12 col-lg-12 m-auto">
                        <h3 class="text-capitalize wow fadeInLeft" data-wow-delay=".2s">Login to<span
                                    class="text-primary"> businesgossip</span></h3><br>

                        <form class="login-form" action="{{ url('/profile/login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">EMAIL</label>
                                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">PASSWORD</label>
                                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="utility">
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox"><span class="label-text">Stay Signed in</span>
                                        </label>
                                    </div>
{{--                                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>--}}
                                </div>
                            </div>
                            <div class="form-group btn-container">
                                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <!--Footer-->
    <footer class="section footer-classic section-sm">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-3 wow fadeInLeft">
                    <!--Brand--><a class="brand" href="{{ url('/') }}">
                        <img class="brand-logo-light" src="{{ url('storage/company',$company->logo) }}" alt="img"/>
                    </a>
                    <p class="footer-classic-description offset-top-0 offset-right-25">{{ $company->description }}</p>
                </div>
                <div class="col-lg-3 col-sm-8 wow fadeInUp">
                    <P class="footer-classic-title">contact info</P>
                    <div class="d-block offset-top-0">{{ $company->address }}</div>
                    <div class="d-block offset-top-0">{{ $company->number }}</div>
                    <a class="d-inline-block accent-link" href="#"><span
                                class="__cf_email__" data-cfemail="5e373038311e3a3b33313237303570312c39">{{ $company->email
                            }}</span></a><a
                            class="d-inline-block" href="tel:#">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
                    <P class="footer-classic-title">Quick Links</P>
                    <ul class="footer-classic-nav-list">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                    <P class="footer-classic-title">newsletter</P>
                    <form class="rd-mailform text-left footer-classic-subscribe-form" data-form-output="form-output-global" data-form-type="contact">
                        <div class="form-wrap">
                            <label class="form-label" for="subscribe-email">Your Email Address</label>
                            <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                        </div>
                        <div class="form-button group-sm text-center text-lg-left">
                            <button class="button button-primary button-circle" type="submit">sign up</button>
                        </div>
                    </form>
                    <p>Be the first to find out about our latest news, updates, and special offers.</p>
                </div>
            </div>
        </div>
        <div class="container wow fadeInUp" data-wow-delay=".4s">
            <div class="footer-classic-aside">
                <p class="rights">Copyright <span>&copy;&nbsp; </span>{{ now()->year }}<span>&nbsp;
                </span><span>{{ $company->name }}</span>
                </p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<<script src="{{ asset('back-end') }}/js/jQuery.js"></script>
<script src="{{ asset('back-end') }}/js/Cookie.js"></script>
<script src="{{ asset('back-end') }}/js/Device.js"></script>
<script src="{{ asset('back-end') }}/js/ResizeEvent.js"></script>
<script src="{{ asset('back-end') }}/js/Easing.js"></script>
<script src="{{ asset('back-end') }}/js/TouchSwipe.js"></script>
<script src="{{ asset('back-end') }}/js/Popper.js"></script>
<script src="{{ asset('back-end') }}/js/Bootstrap.js"></script>
<script src="{{ asset('back-end') }}/js/Regula.js"></script>
<script src="{{ asset('back-end') }}/js/Form.js"></script>
<script src="{{ asset('back-end') }}/js/Owl-carousel.js"></script>
<script src="{{ asset('back-end') }}/js/RDInputLabel.js"></script>
<script src="{{ asset('back-end') }}/js/Isotope.js"></script>
<script src="{{ asset('back-end') }}/js/RD-Navbar.js"></script>
<script src="{{ asset('back-end') }}/js/UIToTop.js"></script>
<script src="{{ asset('back-end') }}/js/Materianize-Parallax.js"></script>
<script src="{{ asset('back-end') }}/js/Swiper.js"></script>
<script src="{{ asset('back-end') }}/js/CountTo.js"></script>
<script src="{{ asset('back-end') }}/js/jquery-circle-progress.js"></script>
<script src="{{ asset('back-end') }}/js/TimeCircles.js"></script>
<script src="{{ asset('back-end') }}/js/Lightgallery.js"></script>
<script src="{{ asset('back-end') }}/js/WOW.js"></script>
<script src="{{ asset('back-end') }}/js/Mousewheel.js"></script>
<script src="{{ asset('back-end') }}/js/PageTransition.js"></script>
<script src="{{ asset('back-end') }}/js/Parallax.js"></script>
<script src="{{ asset('back-end') }}/js/Waypoints.js"></script>
<script src="{{ asset('back-end') }}/js/Select2.js"></script>
<script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="{{ asset('back-end') }}/js/script.js"></script>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</body>
</html>
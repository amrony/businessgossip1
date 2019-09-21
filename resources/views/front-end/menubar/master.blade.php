<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
{{--@dd($articleCategories);--}}
<head>
    <title>businessgossip</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('back-end/images') }}/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back-end/css/bootstrap.css')  }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/mercury.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-fb-comment-box.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/lg-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/css/style.css') }}">
    @yield('css')
</head>

{{--@dd($articleCategories);--}}
{{--@dd($latestNews);--}}
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
    @include('front-end.menubar.includes.header')

        @yield('body')
<!--Footer-->
        @include('front-end.menubar.includes.footer')
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('back-end') }}/js/jQuery.js"></script>
@yield('js')
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>

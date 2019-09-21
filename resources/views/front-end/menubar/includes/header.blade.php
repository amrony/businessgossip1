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
                                    <img class="brand-logo-dark"src="{{ url('storage/company',$company->logo)
                                    }}"alt="img"/>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline navbar-contact-list">
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
            {{--                @dd($articleCategories);--}}
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!--RD Navbar Panel-->

                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                @foreach($articleCategories as $articleCategory )
{{--                                    <li class="rd-nav-item nav"><a class="rd-nav-link" href="{{ url('articles/news?cat_id=').$articleCategory->id }}">{{ $articleCategory->name }}</a>--}}
                                    <li class="rd-nav-item nav"><a class="rd-nav-link" href="{{ url('/latest/news?cat_id=').$articleCategory->id }}">{{ $articleCategory->name }}</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                @foreach($articleCategory->article_sub_categories as $article_sub_category)
                                                    <a class="rd-dropdown-link" href="{{ url('/latest/news?id=').$articleCategory->id.'&sub_cat_id='.$article_sub_category->id }}">{{ $article_sub_category->name }}</a>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-search">
                        <ul class="nav_one">
                            <li><a href="{{ url('/community') }}">Expert Advice</a></li>
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
    <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center; "></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h1 class="font-weight-bold wow fadeInLeft">All Content</h1>
                <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page.
                    We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>


<section class="tabs_sec">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/latest/news?id=').request()->id.'&sub_cat_id='
                                .request()->sub_cat_id }}">Latest</a>
                            </li>
                            <li class="nav-item">
{{--                                <a class="nav-link" href="{{ route('article-news') }}">News</a>--}}
                                <a class="nav-link" href="{{ url('/article-news?id=').request()->id.'&sub_cat_id='
                                .request()->sub_cat_id }}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.buying-guides') }}">Buying Guides</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.expert-advice') }}">Expert Advice</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>


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
                                     alt="img" height="20" width="20"/>
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




        <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
                <!--RD Navbar Panel-->

                <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                        <ul class="rd-navbar-nav">
                            @foreach($articleCategories as $articleCategory )
                                <li class="rd-nav-item nav"><a class="rd-nav-link" href="{{ url('articles/news?cat_id=').$articleCategory->id }}">{{ $articleCategory->name }}</a>
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item">
                                            @foreach($articleCategory->article_sub_categories as $article_sub_category)
                                                <a class="rd-dropdown-link" href="{{ url('/articles/news?id=').$articleCategory->id.'&sub_cat_id='.$article_sub_category->id }}">{{ $article_sub_category->name }}</a>
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





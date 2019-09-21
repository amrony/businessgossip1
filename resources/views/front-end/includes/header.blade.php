<header class="section page-header">
    <!--RD Navbar-->

    <div class="rd-navbar-wrap">
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
                    <ul class="list-inline navbar-contact-list">
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="icon text-middle fa fa-phone"></span></div>
                                <div class="unit-body"><a href="tel:#">{{ $company->number }}</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="icon text-middle fa fa-envelope"></span></div>
                                <div class="unit-body">
                                    <a href="mailto:#">{{ $company->email }}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="icon text-middle fa fa-map-marker"></span></div>
                                <div class="unit-body"><a href="#">{{ $company->address }}</a></div>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-links">
                        <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-linkedin"
                               href="#"></a></li>
                        <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-twitter"
                               href="#"></a></li>
                        <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-facebook"
                               href="#"></a></li>
                        <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa fa-instagram"
                               href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!--RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!--RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!--RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ url('/') }}">
                                <img class="brand-logo-dark" src="{{ url('storage/company',$company->logo) }}"
                                     alt="img" height="20" width="20"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('news-articles') }}">ARTICLES</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('community.index')
                                }}">COMMUNITY</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">REVIEWS</a>
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-service.html">Single
                                                service</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>



                        <div class="ml-3">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                            </button>
                            <div class="dropdown-menu">
                                @if (Auth::guard('profile')->check())
                                    <a class="dropdown-item" href="">My Profile</a>
                                    <a class="dropdown-item" href="{{ route('profile-dashboard') }}">Dashboard</a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        <span>Log Out</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                @else
                                    <a class="dropdown-item" href="{{ route('profile') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('profile-signup') }}">Sign Up</a>
                                @endif
                            </div>
                        </div>


                        <!--RD Navbar Search-->
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
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

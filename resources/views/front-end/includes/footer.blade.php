<footer class="section footer-classic section-sm">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-3 wow fadeInLeft">
                <a class="brand" href="{{ url('/') }}">
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
                <form class="rd-mailform text-left footer-classic-subscribe-form"
                      data-form-output="form-output-global" data-form-type="contact">
                    <div class="form-wrap">
                        <label class="form-label" for="subscribe-email">Your Email Address</label>
                        <input class="form-input" id="subscribe-email" type="email" name="email"
                               data-constraints="@Email @Required">
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






{{--<footer class="section footer-classic section-sm">--}}
{{--    <div class="container">--}}
{{--        <div class="row row-30">--}}
{{--            <div class="col-lg-3 wow fadeInLeft">--}}
{{--                <!--Brand--><a class="brand" href="index-2.html"><img class="brand-logo-dark"--}}
{{--                                                                      src="{{ asset('back-end/images') }}/logo-default-162x34.png"--}}
{{--                                                                      alt="img"/><img--}}
{{--                            class="brand-logo-light" src="{{ asset('back-end/images') }}/logo-inverse-162x34.png" alt="img"/></a>--}}
{{--                <p class="footer-classic-description offset-top-0 offset-right-25">Cemeriss provides a full range--}}
{{--                    of business consulting & advisory services to small, medium, and international companies--}}
{{--                    worldwide. We use innovations and experience to drive your success.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-8 wow fadeInUp">--}}
{{--                <P class="footer-classic-title">contact info</P>--}}
{{--                <div class="d-block offset-top-0">2164 Wall St, New York<span--}}
{{--                            class="d-lg-block">NY 10122, USA</span></div>--}}
{{--                <a class="d-inline-block accent-link" href="#"><span--}}
{{--                            class="__cf_email__" data-cfemail="5e373038311e3a3b33313237303570312c39">info@demolink.org</span></a><a--}}
{{--                        class="d-inline-block" href="tel:#">+1 800 123 45 67</a>--}}
{{--                <ul>--}}
{{--                    <li>Mon-Thu:<span class="d-inline-block offset-left-10 text-white">9:30 AM - 9:00 PM</span></li>--}}
{{--                    <li>Fri:<span class="d-inline-block offset-left-10 text-white">10:00 AM - 9:00 PM</span></li>--}}
{{--                    <li>Sat:<span class="d-inline-block offset-left-10 text-white">10:00 AM - 3:00 PM</span></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">--}}
{{--                <P class="footer-classic-title">Quick Links</P>--}}
{{--                <ul class="footer-classic-nav-list">--}}
{{--                    <li><a href="index-2.html">Home</a></li>--}}
{{--                    <li><a href="about.html">About us</a></li>--}}
{{--                    <li><a href="services.html">Services</a></li>--}}
{{--                    <li><a href="blog.html">Blog</a></li>--}}
{{--                    <li><a href="contacts.html">Contacts</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">--}}
{{--                <P class="footer-classic-title">newsletter</P>--}}
{{--                <form class="rd-mailform text-left footer-classic-subscribe-form"--}}
{{--                      data-form-output="form-output-global" data-form-type="contact">--}}
{{--                    <div class="form-wrap">--}}
{{--                        <label class="form-label" for="subscribe-email">Your Email Address</label>--}}
{{--                        <input class="form-input" id="subscribe-email" type="email" name="email"--}}
{{--                               data-constraints="@Email @Required">--}}
{{--                    </div>--}}
{{--                    <div class="form-button group-sm text-center text-lg-left">--}}
{{--                        <button class="button button-primary button-circle" type="submit">sign up</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <p>Be the first to find out about our latest news, updates, and special offers.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container wow fadeInUp" data-wow-delay=".4s">--}}
{{--        <div class="footer-classic-aside">--}}
{{--            <p class="rights"><span>&copy;&nbsp; </span><span--}}
{{--                        class="copyright-year"></span><span>&nbsp;</span><span>Cemeriss</span><span>.&nbsp;</span><span>All rights reserved.</span><span>&nbsp;</span><span>Terms and Conditions</span><span>&nbsp;</span><span>|</span><span>&nbsp;</span><a--}}
{{--                        href="privacy-policy.html">Privacy Policy</a></p>--}}
{{--            <ul class="social-links">--}}
{{--                <li><a class="fa fa-linkedin" href="#"></a></li>--}}
{{--                <li><a class="fa fa fa-twitter" href="#"></a></li>--}}
{{--                <li><a class="fa fa-facebook" href="#"></a></li>--}}
{{--                <li><a class="fa fa-instagram" href="#"></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
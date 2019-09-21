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
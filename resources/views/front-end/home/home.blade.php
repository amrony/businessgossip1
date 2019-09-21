@extends('front-end.master')
@section('title')
    businesgossip
    @endsection

@push('css')

    @endpush

@section('body')
    <!--Main section-->
    <section class="section main-section parallax-scene-js"
             style="background:url('{{ asset('back-end/images') }}/imgpsh_fullsize_anim.jpg') no-repeat center center; background-size:cover; height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-12">
                    <div class="main-decorated-box text-center text-xl-left">
                        <h1 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"></h1>
                        <div class="decorated-subtitle text-italic text-white wow slideInLeft">Fresh Ideas for Your
                            Business
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a
                            class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center"
                            href="#" data-custom-scroll-to="about"><span class="fa fa-chevron-down"></span></a></div>
            </div>
        </div>
        <div class="decorate-layer">
            <div class="layer-1">
                <div class="layer" data-depth=".20"><img src="{{ asset('back-end/images') }}/parallax-item-1-563x532.png" alt="img"/>
                </div>
            </div>
            <div class="layer-2">
                <div class="layer" data-depth=".30"><img src="{{ asset('back-end/images') }}/parallax-item-2-276x343.png" alt="img"/>
                </div>
            </div>
            <div class="layer-3">
                <div class="layer" data-depth=".40"><img src="{{ asset('back-end/images') }}/parallax-item-3-153x144.png" alt="img"/>
                </div>
            </div>
            <div class="layer-4">
                <div class="layer" data-depth=".20"><img src="{{ asset('back-end/images') }}/parallax-item-4-69x74.png" alt="img"/>
                </div>
            </div>
            <div class="layer-5">
                <div class="layer" data-depth=".40"><img src="{{ asset('back-end/images') }}/parallax-item-5-72x75.png" alt="img" />
                </div>
            </div>
            <div class="layer-6">
                <div class="layer" data-depth=".30"><img src="{{ asset('back-end/images') }}/parallax-item-6-45x54.png" alt="img"/>
                </div>
            </div>
        </div>
    </section>
    <!--About-->
    <section class="section section-sm position-relative" id="about">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img
                                src="{{ url('storage/about_us',$aboutUs->image) }}" alt="img" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="block-sm offset-top-45">
                        <div class="section-name wow fadeInRight" data-wow-delay=".2s">About us</div>
                        <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">
                            {{ $aboutUs->title }}</h3>
{{--                        }What We<span class="text-primary"> Do</span>--}}
                        <p class="offset-xl-40 wow fadeInUp" data-wow-delay=".4s">{{ $aboutUs->short_description }}</p>
                        <a class="button-width-190 button-primary button-circle button-lg button offset-top-30"
                                href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-text decor-text-1">ABOUT</div>
    </section>
    <!--Features-->
    <section class="section custom-section position-relative section-md">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-12">
                    <div class="section-name wow fadeInRight">our features</div>
                    <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">
                        {{ $features->title }}
{{--                        Why Businesses<span class="text-primary"> Choose us</span>--}}
                    </h3>
                    <p>{{ $features->short_description }}</p>
                    <div class="row row-15">
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="box-default">
                                <div class="box-default-title">{{ $features->title_one }}</div>
                                <p class="box-default-description">{{ $features->description_one }}</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="box-default">
                                <div class="box-default-title">{{ $features->title_two }}</div>
                                <p class="box-default-description">{{ $features->description_two }}</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-target-2"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="box-default">
                                <div class="box-default-title">{{ $features->title_three }}</div>
                                <p class="box-default-description">{{ $features->description_three }}</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-user"></span>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="box-default">
                                <div class="box-default-title">{{ $features->title_four }}</div>
                                <p class="box-default-description">{{ $features->description_four }}</p><span
                                        class="box-default-icon novi-icon icon-lg mercury-icon-partners"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-left-side wow slideInRight" data-wow-delay=".5s">
            <img src="{{ url('storage/featutes',$features->image) }}" alt="img"/>
        </div>
        <div class="decor-text decor-text-2 wow fadeInUp" data-wow-delay=".3s">features</div>
    </section>
    <!--Counters-->
    <section class="section"
             style="background: url('{{ asset('back-end/images') }}/bg-image-2-1700x257.jpg')no-repeat; background-size:cover;">
        <div class="container section-md">
            <div class="row row-30 text-center">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-time"></span><span
                                    class="counter text-white" data-speed="2000">2007</span>
                        </div>
                        <div class="counter-classic-title">Year of Establishment</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-folder"></span><span
                                    class="counter text-white" data-speed="2000">547</span>
                        </div>
                        <div class="counter-classic-title">Successful Projects</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-users"></span><span
                                    class="counter text-white" data-speed="2000">45</span><span
                                    class="symbol text-white">+</span>
                        </div>
                        <div class="counter-classic-title">Global Partners</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="counter-classic">
                        <div class="counter-classic-number"><span
                                    class="icon-lg novi-icon offset-right-10 mercury-icon-group"></span><span
                                    class="counter text-white" data-speed="2000">1500</span>
                        </div>
                        <div class="counter-classic-title">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing-->
    <section class="section section-md bg-xs-overlay"
             style="background:url('{{ asset('back-end/images') }}/bg-image-3-1700x883.jpg')no-repeat;background-size:cover">

    </section>
    <!--Owl Carousel-->
    <section class="section section-md bg-gray-lighten">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="section-name wow fadeInRight text-center" data-wow-delay=".2s">testimonials</div>
                    <h3 class="wow fadeInLeft text-capitalize text-center" data-wow-delay=".3s">{{ $testimonial->title
                    }}</h3>
{{--                        <span class="text-primary"> About Us</span></h3>--}}

                    <div class="owl-carousel review-carousel" data-items="1" data-dots="true" data-nav="false"
                         data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="true"
                         data-autoplay="false">
                        <div class="item">
                            <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img
                                        src="{{ url('storage/testimonial',$testimonial->image) }}" alt="img"/>
                            </div>
                            <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                                <p>{{ $testimonial->description }}</p>
                                <div class="item-subsection"><span class="item-subsection-title
                                devider-left">{{ $testimonial->name }}</span><span>{{ $testimonial->designation
                                }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News-->
    <section class="section section-md bg-gray-dark position-relative custom-index">
        <div class="container position-relative">
            <div class="row row-30 justify-content-center">
                <div class="col-8 text-center text-center">
                    <div class="section-name wow fadeInRight text-white">Business Gossip</div>
                    <h3 class="text-capitalize wow fadeInLeft text-white" data-wow-delay=".2s">Recent<span
                                class="text-primary"> News</span></h3>
                </div>
            </div>
{{--            @dd($latestNews);--}}
            <div class="row row-30 justify-content-center">
                @foreach($latestNews as $latestNew)
                <div class="col-xl-4 col-md-6 col-12 wow fadeInDown">

                    <div class="post-classic-wrap post-classic-toggle-bg-1">
                        <div class="post-classic-photo"><img src="{{ asset('back-end/images') }}/box-img-1-370x355.jpg" alt="img"/>
                        </div>
                        <div class="post-classic-label button-sm text-uppercase font-weight-normal">{{
                        $latestNew->title }}</div>
                        <div class="post-classic-date">{{ $latestNew->created_at }}</div>
                        <h5><a class="offset-top-10 font-weight-bold" href="#">{{ str_limit($latestNew->body,50)
                        }}</a></h5>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="decor-text decor-text-3 section-sm wow fadeInUp" data-wow-delay=".3s">news</div>
    </section>
    <!--Contacts-->


@push('js')

    @endpush
@endsection


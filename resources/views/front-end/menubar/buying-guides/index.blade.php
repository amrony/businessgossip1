@extends('front-end.menubar.master')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    @endsection
@section('body')
    <section id="scrollspy">
        <section id="sec_two" class="section section-intro context-dark">
            <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center; "></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <h1 class="font-weight-bold wow fadeInLeft"> {{ $buyingAdvice->title }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <br>

        <div class="container">
            <div class="row">
                <nav class="navbar  col-sm-3" id="myScrollspy">
                    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                        <li><a href="#section1"> Best Product Survice</a></li>
                        @foreach($buyingAdvice->additional_buying_advices as $addBuyingAdvice)
                        <li><a href="#section{{ $addBuyingAdvice->id }}">{{ $addBuyingAdvice->additional_title }}</a></li>
                        @endforeach
                        <li><a href="#section7"> Best Providers</a></li>
                    </ul>
                </nav>

                <div class="col-sm-9">
                    <div class="spy-text">
{{--                        <h4 class="font-weight-bold wow fadeInLeft"> {{ $buyingAdvice->title }}</h4>--}}
                        <p>{{ $buyingAdvice->body }}</p>
                    </div><br><br>

                    <div id="section1">
                        <div>
                            <h3>Best Product Survice</h3>
                        </div>
                        <br>
                    @foreach($profileArticles as $buyingGuide)
                        <div class="container">
                                <img src="{{  url('storage/business_profile/'
                                .$buyingGuide->business_profile_article->image) }}" alt="Pineapple"
                                     style="width: 150px; float: left;height: 120px;margin-right: 15px;">
                                <h4>{{ $buyingGuide->business_profile_article->title }}</h4>
                                <p>{{ $buyingGuide->business_profile_article->long_description }}</p>
{{--                            @dd($buyingGuide->business_profile_article->short_description)--}}
                        </div>
                            @endforeach
                    </div><br><br>

                    @foreach($buyingAdvice->additional_buying_advices as $addBuyingAdvice)
                    <div id="section{{ $addBuyingAdvice->id }}">
                        <h3 style="color: #ffffff00;">2.Trends to Look for in 2019</h3>
                        <h3>{{ $addBuyingAdvice->additional_title }}</h3>
                        <p>{{ $addBuyingAdvice->additional_body }}</p>
                    </div>
                    @endforeach
                    <div id="section7">
                        <h3 style="color: #fff;">1. Join the right LinkedIn Groups.</h3>

                        <h3> Best Providers.</h3>
                        <h4>List of the The Best Wide-Format Printers of 2019</h4><br>
                        @foreach($profileArticles as $profileArticle)
                            <div class="new-services">
                                <div class="col-md-2">
{{--                                    <img src="assets/images/textim1.jpg" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
                                    <img src="{{ url('storage/company-profile', $profileArticle->business_profile_article->business_profile->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                </div>
                                <div class="col-md-10">
                                    <h5>{{ $profileArticle->business_profile_article->business_profile->name }}</h5>
                                    <h5>{{ str_limit
                                    ($profileArticle->business_profile_article->business_profile->short_description ,
                                     200
                                    ) }}</h5>
                                    <a href="#"></a>
                                    <p> <a href="{{ $profileArticle->business_profile_article->business_profile->link }}">{{ $profileArticle->business_profile_article->business_profile->link }}</a></p>
                                </div>
                            </div>
                        @endforeach


                    </div><br><br>

                </div>
            </div>
            </div>
    </section>


   @section('js')
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

       <script>
           $(document).ready(function(){
               // Add scrollspy to <body>
               $('body').scrollspy({target: ".navbar", offset: 50});

               // Add smooth scrolling on all links inside the navbar
               $("#myScrollspy a").on('click', function(event) {
                   // Make sure this.hash has a value before overriding default behavior
                   if (this.hash !== "") {
                       // Prevent default anchor click behavior
                       event.preventDefault();

                       // Store hash
                       var hash = this.hash;

                       // Using jQuery's animate() method to add smooth page scroll
                       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                       $('html, body').animate({
                           scrollTop: $(hash).offset().top
                       }, 800, function(){

                           // Add hash (#) to URL when done scrolling (default click behavior)
                           window.location.hash = hash;
                       });
                   }  // End if
               });
           });
       </script>
   @endsection
@endsection

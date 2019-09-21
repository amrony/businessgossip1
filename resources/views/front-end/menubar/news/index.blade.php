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
{{--            <div class="intro-bg" style="background: url({{ url('storage/news/'.$news->image) }}) no-repeat;background-size:cover;background-position: top center; "></div>--}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <h1 class="font-weight-bold wow fadeInLeft">{{ $news->title }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <br>

        <div class="container">
            <div class="row">
                <nav class="navbar  col-sm-3" id="myScrollspy">
                    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                        @foreach($news->additional_news as $new)
                            <li><a href="#section{{ $new->id }}">{{ $new->title }}</a></li>
                        @endforeach
                    </ul>
                </nav>

                <div class="col-sm-9">

                    <div class="text_secL">
                            <img src="{{ url('storage/news/'.$news->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                            {{ $news->body }}
                    </div><br>


                    @foreach($news->additional_news as $new)
                        <div id="section{{ $new->id }}">
                            <h3>{{ $new->title }}</h3>
                            <p>{{ $new->body }}</p>
                        </div>
                    @endforeach
                    <br><br>

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

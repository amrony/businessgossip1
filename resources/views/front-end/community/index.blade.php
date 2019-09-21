@extends('profile.master')

@push('css')
@endpush

@section('body')

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

    <div class="col-md-12 mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5 class="pull-right"><b>Have a question you need an expert answer to?</b></h5>
            </div>
            <div class="col-md-6">
                @if (Auth::guard('profile')->check())
                <a href="{{ route('question_add') }}" class="btn btn-primary active">Ask a Question</a>
                    @else
                        <a href="{{ route('profile') }}" class="btn btn-primary active">Ask a Question</a>
                    @endif
            </div>
        </div>

    </div>
    <br><br>

    <section id="scrollspy">
        <div class="container-fluid" style="background-color: #f5f5f5;color:#fff;height:0px;">

        </div>
        <br>

        <div class="container">
            <div class="row">

                <div id="myScrollspy" class="profile col-sm-3">
                    <div class="profile">
                        <h4>Marketing</h4>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">My Dashboard</a></li>
                                <li><a href="#">My Settings</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">Invitations</a></li>
                            </ul>
                        </nav>
                        <h4>Finance and Money</h4>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">My Dashboard</a></li>
                                <li><a href="#">My Settings</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">Invitations</a></li>
                            </ul>
                        </nav>
                        <h4>Finance and Money</h4>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">My Dashboard</a></li>
                                <li><a href="#">My Settings</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">My Alerts</a></li>
                                <li><a href="#">My Experts</a></li>
                            </ul>
                        </nav>
                        <h4>General</h4>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#"> Community Discussion</a></li>
                            </ul>
                        </nav>
                    </div></br>
                </div>
                <div class="col-sm-9">

                    <div id="sectionl">
                        <!-- tabs start -->
                        <div class="tabs_sec">
                            <div class="col-md-12">
                                <div class="tab ">
                                    <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Answer a Question</button>
                                </div>
                            </div><br>
{{--                            @dd($communities);--}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <!-- =============================first tabs =================================-->
                                        <div id="London" class="tabcontent first_tab">
                                            @foreach($communities as $community)
                                                <div class="new-services London ">
                                                    <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                        <img src="@if($community->profile->profileInfo){{ url('storage/profile_image',
                                                        $community->profile->profileInfo->image) }}@endif"
                                                             class="rounded-circle"  width="70"
                                                             height="70">
                                                    </div>

                                                    <div class="col-md-10 question" >
                                                        @if (Auth::guard('profile')->check())
                                                            <a rel="nofollow" href="{{ route('answers.show', $community->id)
                                                            }}">
                                                        <h4 style="margin: 8px 0 0 0;">
                                                           {{$community->question }}
                                                        </h4>
                                                            <p>{{ str_limit($community->description,100) }}</p>
                                                            </a>
                                                            @else
                                                            <a rel="nofollow" href="{{ route('profile')
                                                                }}">
                                                            <h4 style="margin: 8px 0 0 0;">
                                                                {{$community->question }}
                                                            </h4>
                                                            <p>{{ str_limit($community->description,100) }}</p>
                                                            </a>
                                                            @endif
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        {{ $communities->links() }}
                                    </div>
                                </div>
                            </div>

                        </div><br><br>
                        <!-- tabs end -->

                    </div><br><br>

                </div>

            </div></div>
    </section>





@section('js')


    <!-- tabs js -->
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

@endsection

@endsection
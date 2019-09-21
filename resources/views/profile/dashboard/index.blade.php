@extends('profile.master')

@push('css')
    @endpush

@section('body')
    <br><br>
    <section id="scrollspy">
        <div class="container-fluid" style="background-color: #f5f5f5;color:#fff;height:0px;">

        </div>
        <br>

        <div class="container">
            <div class="row">
{{--                @dd($profileInfo);--}}
                <div id="myScrollspy" class="profile col-sm-3">
                    <div class="profile">
                        <img src="@if($profileInfo){{ url('storage/profile_image', $profileInfo->image) }} @endif" class="rounded-circle"  width="128" height="128">
{{--                        <img src="{{ url('storage/profile_image', $profileInfo->image) }}" class="rounded-circle"  width="128" height="128">--}}
                        <div class="prf-text">
                            <h5 class="prf-t">@if($profileInfo){{ $profileInfo->first_name }}@endif</h5>
                            <a href="">View Profile |</a>
                            <a href="{{ route('profile-edit') }}"> Edit Profile</a>
{{--                            <a href="{{ route('profile-edit', [auth('profile')->user()->id] ) }}"> Edit Profile</a>--}}
                        </div>
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">My Dashboard</a></li>
                                <li><a href="#">My Settings</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">My Alerts</a></li>
                                <li><a href="#">My Experts</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="#">My Reviews</a></li>
                                <li><a href="#">My Offers</a></li>
                                <li><a href="#">Become a Contributor</a></li>
                                <li><a href="#">Free Report Card</a></li>
                                <li><a href="#">Badges</a></li>
                                <li><a href="#">Invitations</a></li>
                            </ul>
                        </nav>
                    </div><br>
                    <div class="section-second">
                        <p>
                            How Does Your Business Stack Up? <span>Get a Free Business Report Card!</span>
                        </p>
                        <button class="tablinks join-n" onclick="openCity(event, 'London')">Get My Report Card</button>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="spy-text">
                        <h5>Our community is a place for small business owners to connect, exchange advice, and help each other make smarter business decisions.</h5>
                        <div class="col-md-8">
                            <p>
                                You now have access to thousands of business articles, expert advice, and other business tools to help you succeed. We encourage you to start conversations and share your own business experiences. Each time a member contributes, our community becomes more robust.
                            </p>
                            <p>
                                Do you have more to say? Share informative content on Business.com. If accepted, we will link it back to your community profile for other small business owners and potential clients to see.
                            </p>
                        </div>
                        <div class="col-md-4 botton-ts">
                            <button class="tablinks join-n" onclick="openCity(event, 'London')">JOIN OUR COMMUNITY</button><br>
                            <button class="tablinks join-n" onclick="openCity(event, 'London')">JOIN OUR COMMUNITY</button>
                        </div>

                    </div>
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
                    </div><br><br>



                    <br>


                    <div id="sectionl">
                        <!-- tabs start -->
                        <div class="tabs_sec">
                            <div class="col-md-12">
                                <div class="tab ">
                                    <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Answer a Question</button>
                                </div>



                            </div><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <!-- =============================first tabs =================================-->
                                        <div id="London" class="tabcontent first_tab">
                                            @foreach($communities as $community)
                                            <div class="new-services London ">
                                                <div class="col-md-2" style="margin: -11px 0 0 -62px;">
                                                    <img src="@if($community->profile->profileInfo){{ url('storage/profile_image',
                                                    $community->profile->profileInfo->image) }}@endif" class="rounded-circle"  width="70" height="70">
                                                </div>
                                                <div class="col-md-10" >
                                                    <h4 style="margin: 8px 0 0 0;">
                                                        <a rel="nofollow" href="{{ route('answers.show', $community->id)
                                                            }}">{{ $community->question }}</a>
                                                    </h4>
                                                    <p>{{ str_limit($community->description,100) }}</p>
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- tabs end -->

                    </div><br><br>

                    <div class="join-page">
{{--                        <button class="tablinks join-n" onclick="openCity(event, 'London')">next</button>--}}
                    </div>
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
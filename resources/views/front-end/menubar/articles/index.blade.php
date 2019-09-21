@extends('front-end.menubar.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="container first_tab">

                    {{--                            <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">--}}
                    <a href="{{ route('view-news', $firstLatestNews->id) }}">
                        <img src="@if($firstLatestNews){{ url('storage/news/'.$firstLatestNews->image) }}@endif"
                             alt="Notebook"
                             style="width:100%;">

                        <div class="top-text">
                            <h3>@if($firstLatestNews){{ $firstLatestNews->title }}@endif</h3>
                            <p>@if($firstLatestNews){{ str_limit($firstLatestNews->body, 200) }}@endif</p>
                        </div>
                    </a>

                    <div class="text_secL">
                        @foreach($latestNews as $latestNew)
                            <div class="text_l" >
                                <a href="{{ route('view-news', $latestNew->id) }}">
                                    <img src="{{ url('storage/news/'.$latestNew->image) }}" alt="Pineapple"
                                         style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>{{ $latestNew->title }}</h4>
                                    <p>{{ $latestNew->body }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 box_right">
                <div class="container">
                    <div class="text_secL">
                        <h4>Buying Advice</h4><br>
                        <div class="text_l  1" >
                            @foreach($communities as $community)
                                <h4>{{ $community->question }}</h4>
                                <p>{{ str_limit($community->description, 80) }}</p><br>
                                <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">{{ $community->answers->count() }} answers</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{--            <button class="tablinks" onclick="openCity(event, 'London')">Ask a Question</button>--}}
            </div>
        </div>
    </div>





{{--    <section class="tabs_sec">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="col tab ">--}}
{{--                <a  class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Latest</a>--}}
{{--                <a href="" class="tablinks" onclick="openCity(event, 'Paris')">News</a>--}}
{{--                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Buying Guides</button>--}}
{{--                <button class="tablinks" onclick="openCity(event, 'China')">Expert Advice</button>--}}
{{--                <button class="tablinks" onclick="openCity(event, 'America')">Experts</button>--}}
{{--                <button class="tablinks" onclick="openCity(event, 'Jordan')" >Business Listings</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8">--}}
{{--                    <!-- =============================first tabs =================================-->--}}
{{--                    <div id="London" class="tabcontent first_tab">--}}

{{--                        <div class="container first_tab">--}}

{{--                                                        <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">--}}
{{--                            <a href="{{ route('view-news', $firstLatestNews->id) }}">--}}
{{--                                <img src="@if($firstLatestNews){{ url('storage/news/'.$firstLatestNews->image) }}@endif"--}}
{{--                                     alt="Notebook"--}}
{{--                                     style="width:100%;">--}}

{{--                                <div class="top-text">--}}
{{--                                    <h3>@if($firstLatestNews){{ $firstLatestNews->title }}@endif</h3>--}}
{{--                                    <p>@if($firstLatestNews){{ str_limit($firstLatestNews->body, 200) }}@endif</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <div class="text_secL">--}}
{{--                                @foreach($latestNews as $latestNew)--}}
{{--                                    <div class="text_l" >--}}
{{--                                        <a href="{{ route('view-news', $latestNew->id) }}">--}}
{{--                                            <img src="{{ url('storage/news/'.$latestNew->image) }}" alt="Pineapple"--}}
{{--                                                 style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                            <h4>{{ $latestNew->title }}</h4>--}}
{{--                                            <p>{{ $latestNew->body }}</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- second tabs -->--}}
{{--                    <div id="Paris" class="tabcontent">--}}
{{--                        <div class="container first_tab">--}}
{{--                                                        <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">--}}
{{--                            <a href="{{ route('view-news', $firstNews->id) }}">--}}
{{--                                <img src="@if($firstNews){{ url('storage/news/'.$firstNews->image) }}@endif" alt="Notebook"--}}
{{--                                     style="width:100%;">--}}
{{--                                <div class="content first_text">--}}
{{--                                    <h3>@if($firstNews){{ $firstNews->title }}@endif</h3>--}}
{{--                                    <p>@if($firstNews){{ str_limit($firstNews->body, 200) }}@endif</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <div class="text_secL">--}}
{{--                                @foreach($news as $new)--}}
{{--                                    <div class="text_l  1" >--}}
{{--                                        <a href="{{ route('view-news', $new->id) }}">--}}
{{--                                            <img src="{{ url('storage/news/'.$new->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                            <h4>{{ $new->title }}</h4>--}}
{{--                                            {{ $new->body }}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- third tabs -->--}}

{{--                                        @dd($buyingAdvices)--}}
{{--                    <div id="Tokyo" class="tabcontent">--}}
{{--                        <div class="container first_tab">--}}
{{--                            <a href="{{ route('first-buying',$firstBuyingAdvice->id ) }}">--}}
{{--                                <img src="@if($firstBuyingAdvice){{ url('storage/buying_advice/'--}}
{{--                            .$firstBuyingAdvice->image) }}@endif" alt="Notebook"--}}
{{--                                     style="width:100%;height: 280px;">--}}
{{--                                <div class="content first_text">--}}
{{--                                    <h3>@if($firstBuyingAdvice){{ $firstBuyingAdvice->title }}@endif</h3>--}}
{{--                                    <p>@if($firstBuyingAdvice){{ str_limit($firstBuyingAdvice->body, 200) }}@endif</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <div class="text_secL">--}}
{{--                                @foreach($buyingAdvices as $buyingAdvice)--}}
{{--                                    <div class="text_l  1" >--}}
{{--                                        <a href="{{ route('buying-guides', $buyingAdvice->id) }}">--}}
{{--                                            <img src="{{ url('storage/buying_advice/'.$buyingAdvice->image) }}" alt="Pineapple"--}}
{{--                                                 style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                            <h4>{{ $buyingAdvice->title }}</h4>--}}
{{--                                            <p>{{ str_limit($buyingAdvice->body, 200) }}</p>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}




{{--                    <div id="Paris" class="tabcontent">--}}
{{--                        <div class="container first_tab">--}}
{{--                                                        <img src="{{ asset('back-end/images') }}/img_nature_wide.jpg" alt="Notebook" style="width:100%;">--}}
{{--                            <a href="{{ route('view-news', $firstNews->id) }}">--}}
{{--                                <img src="@if($firstNews){{ url('storage/news/'.$firstNews->image) }}@endif" alt="Notebook"--}}
{{--                                     style="width:100%;">--}}
{{--                                <div class="content first_text">--}}
{{--                                    <h3>@if($firstNews){{ $firstNews->title }}@endif</h3>--}}
{{--                                    <p>@if($firstNews){{ str_limit($firstNews->body, 200) }}@endif</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <div class="text_secL">--}}
{{--                                @foreach($news as $new)--}}
{{--                                    <div class="text_l  1" >--}}
{{--                                        <a href="{{ route('view-news', $new->id) }}">--}}
{{--                                            <img src="{{ url('storage/news/'.$new->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                            <h4>{{ $new->title }}</h4>--}}
{{--                                            {{ $new->body }}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- tourth tabs -->--}}


{{--        <div id="China" class="tabcontent">--}}
{{--            <div class="container first_tab">--}}
{{--                <div class="text_secL">--}}
{{--                    @foreach($communities as $community)--}}
{{--                        <div class="text_l  1" >--}}
{{--                            @if (Auth::guard('profile')->check())--}}
{{--                            <a href="{{ route('answers.show', $community->id) }}">--}}
{{--                                <img src="{{ url('storage/profile_image',--}}
{{--                                                        $community->profile->profileInfo->image) }}" alt="Pineapple"--}}
{{--                                     style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                <h4>{{ $community->question }}</h4>--}}
{{--                                <p>{{ str_limit($community->description, 200) }}</p>--}}
{{--                            </a>--}}
{{--                            @else--}}
{{--                                <a href="{{ route('profile') }}">--}}
{{--                                    <img src="{{ url('storage/profile_image',--}}
{{--                                                        $community->profile->profileInfo->image) }}" alt="Pineapple"--}}
{{--                                         style="width: 105px; float: left;height: 89px;margin-right: 15px;">--}}
{{--                                    <h4>{{ $community->question }}</h4>--}}
{{--                                    <p>{{ str_limit($community->description, 200) }}</p>--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}










{{--        <div id="America" class="tabcontent">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!--}}
{{--                                I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!--}}
{{--                                I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager here at business.com!--}}
{{--                                I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager--}}
{{--                                here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content--}}
{{--                                Manager here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager--}}
{{--                                here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager--}}
{{--                                here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/user-1-216x216.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager--}}
{{--                                here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <div class="gallery">--}}
{{--                            <a target="_blank" href="img_forest.jpg">--}}
{{--                                <img src="{{ asset('back-end/images') }}/textim3.jpg" alt="Forest" width="600" height="400">--}}
{{--                            </a>--}}
{{--                            <h4>Jeff Ropelato</h4>--}}
{{--                            <p class="disabled">Marketing Strategy Expert US.</p>--}}
{{--                            <div class="desc">Hi, my name is Jeff Ropelato and I am the Community Content Manager--}}
{{--                                here at business.com! I will be your go-to resource for the business.com community.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- ==============================six no tabs ====================================-->--}}
{{--        </div>--}}
{{--        <!-- ==============================tabs Right side bar ===============================-->--}}
{{--        <div class="col-md-4 box_right">--}}
{{--            <div class="container">--}}
{{--                <div class="text_secL">--}}
{{--                    <h4>Buying Advice</h4><br>--}}
{{--                    <div class="text_l  1" >--}}
{{--                        @foreach($communities as $community)--}}
{{--                        <h4>{{ $community->question }}</h4>--}}
{{--                        <p>{{ str_limit($community->description, 80) }}</p><br>--}}
{{--                        <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">{{ $community->answers->count() }} answers</p>--}}
{{--                            @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--                        <button class="tablinks" onclick="openCity(event, 'London')">Ask a Question</button>--}}
{{--        </div>--}}
{{--        </div>--}}

{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- About page about section-->--}}




@endsection
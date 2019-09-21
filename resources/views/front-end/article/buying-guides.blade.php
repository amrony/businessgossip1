@extends('front-end.menubar.master')

@section('body')


    <div class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="container first_tab">
                    <a href="{{ route('first-buying', $firstBuyingAdvice->id) }}">
                        <img src="@if($firstBuyingAdvice){{ url('storage/buying_advice/'
                            .$firstBuyingAdvice->image) }}@endif" alt="Notebook"
                             style="width:100%;height: 280px;">

                        <div class="top-text">
                            <h3>@if($firstBuyingAdvice){{ $firstBuyingAdvice->title }}@endif</h3>
                            <p>@if($firstBuyingAdvice){{ str_limit($firstBuyingAdvice->body, 200) }}@endif</p>
                        </div>
                    </a>

                    {{--                        <a href="{{ route('first-buying',$firstBuyingAdvice->id ) }}">--}}
                    {{--                            <img src="@if($firstBuyingAdvice){{ url('storage/buying_advice/'--}}
                    {{--                            .$firstBuyingAdvice->image) }}@endif" alt="Notebook"--}}
                    {{--                                 style="width:100%;height: 280px;">--}}
                    {{--                            <div class="content first_text">--}}
                    {{--                                <h3>@if($firstBuyingAdvice){{ $firstBuyingAdvice->title }}@endif</h3>--}}
                    {{--                                <p>@if($firstBuyingAdvice){{ str_limit($firstBuyingAdvice->body, 200) }}@endif</p>--}}
                    {{--                            </div>--}}
                    {{--                        </a>--}}

                    <div class="text_secL">
                        @foreach($buyingAdvices as $buyingAdvice)
                            <div class="text_l  1" >
                                <a href="{{ route('buying-guides', $buyingAdvice->id) }}">
                                    <img src="{{ url('storage/buying_advice/'.$buyingAdvice->image) }}" alt="Pineapple"
                                         style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                    <h4>{{ $buyingAdvice->title }}</h4>
                                    <p>{{ str_limit($buyingAdvice->body, 200) }}</p>
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
                {{--                                <button class="tablinks" onclick="openCity(event, 'London')">Ask a Question</button>--}}
            </div>
        </div>
    </div>

@endsection

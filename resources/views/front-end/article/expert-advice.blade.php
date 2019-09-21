@extends('front-end.menubar.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container first_tab">
                    <div class="text_secL">
                        @foreach($communities as $community)
                            <div class="text_l  1" >
                                @if (Auth::guard('profile')->check())
                                    <a href="{{ route('answers.show', $community->id) }}">
                                        <img src="{{ url('storage/profile_image',
                                                        $community->profile->profileInfo->image) }}" alt="Pineapple"
                                             style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>{{ $community->question }}</h4>
                                        <p>{{ str_limit($community->description, 200) }}</p>
                                    </a>
                                @else
                                    <a href="{{ route('profile') }}">
                                        <img src="{{ url('storage/profile_image',
                                                        $community->profile->profileInfo->image) }}" alt="Pineapple"
                                             style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                        <h4>{{ $community->question }}</h4>
                                        <p>{{ str_limit($community->description, 200) }}</p>
                                    </a>
                                @endif
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
    <!-- About page about section-->




@endsection
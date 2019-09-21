@extends('profile.master')

@push('css')
@endpush

@section('body')
    <br>
    <br>
    <br>
    {{--    @dd($community);--}}

    <div class="container" style="background-color: #FFFFFF; padding: 20px;">
        <div class="col-md-2" style="margin: -5px 0 0 -62px;">
            {{--           <img src="{{ asset('back-end/images') }}/single-post-2-368x293.jpg" class="rounded-circle"  width="70" height="70">--}}
            <img src="@if($community->profile->profileInfo){{ url('storage/profile_image',
           $community->profile->profileInfo->image) }}@endif"
                 class="rounded-circle"  width="70" height="70">
        </div>
        <div class="col-md-10 col-sm-12" >
            <h4 style="margin: 8px 0 0 0;">{{ $community->question }}</h4>
            <p>{{ $community->description }}</p>
        </div>

        <div class="col-md-12 mt-5">
            <div class="row ml-3">
                <input name="answer" type="button" class="btn btn-primary active" value="Answer This
               Question" onclick="showDiv()"/>
            </div><br>

            <div class="col-md-12">
                <div id="welcomeDiv"  style="display:none;" class="answer_list" >
                    <form action="{{ route('answers.store') }}" method="POST">
                        @csrf
                        <label>Answer Question</label>
                        <textarea rows="5" name="description"></textarea>
                        <br>
                        <input type="hidden" name="community_id" value="{{ $community->id }}">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <br><br>

    {{--@dd($answers->profile->name);--}}

    {{--@dd($community);--}}

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Expert Answers</h4><br>
                <div class="answer-left">
                    @foreach($community->answers as $answer)
                        <div class="answer-main">
                            <div class="row">
                                <img src="@if($answer->profile->profileInfo){{ url('storage/profile_image',
                            $answer->profile->profileInfo->image) }}@endif"
                                     class="rounded-circle"  width="70" height="70">
                                <h4 class="answer-name">{{ $answer->profile->name }}</h4>
                            </div>
                            <div style="padding: 30px; border-bottom: 1px solid gray;">
                                <p>
                                    {{ $answer->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">

                <span><h4>Related Questions</h4></span>
                <div class="answer-right">
                    @foreach($communities as $community)
                        <div style="border-bottom: 1px solid gray;">
                            <div style="padding: 10px">
                                <a href="{{ route('answers.show', $community->id)
                                                            }}">
                                    <h6>{{ $community->question }}</h6>
                                </a>
                            </div>
                            <h5 style="padding: 10px; color: #FF8C0F;">{{ $community->answers->count() }} Answers</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




@section('js')

    <script>
        function showDiv1() {
            document.getElementById('welcomeDiv1').style.display = "block";
        }
    </script>

    <script>
        function showDiv() {
            document.getElementById('welcomeDiv').style.display = "block";
        }
    </script>
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

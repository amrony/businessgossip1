@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Profile</h3></label>
                        {{--                        <a href="" class="btn btn-info pull-right">View Info</a>--}}
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form method="POST" action="" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    @method('PUT')

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Name :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Enter your name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Email Address :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address_2" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Enter your email address">
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row clearfix">--}}
{{--                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">--}}
{{--                            <label for="email_address_2">Profile Image : </label>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="form-line">--}}
{{--                                    <input type="file" name="image"><br><br>--}}
{{--                                    --}}{{--                                    <img src="{{ url('storage/about_us',$about->image) }}" height="100" width="80">--}}
{{--                                    <img src="{{ url('storage/profile',Auth::user()->image) }}" height="120"--}}
{{--                                         width="120">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row clearfix">--}}
{{--                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">--}}
{{--                            <label for="email_address_2">About :</label>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="form-line">--}}
{{--                                    <textarea name="about" rows="5" class="form-control">{{ Auth::user()->about }}</textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
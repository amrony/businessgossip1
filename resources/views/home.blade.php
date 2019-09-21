@extends('admin.admin_master')
@section('title','Ecommerce | Web Configuration')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title">Update Web Configuration</h3>
                <div class="tile-body">
                    <form action="{{url('website-update-process')}}" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="webconfig_id" value="{{!empty($web_infos->webconfig_id)?$web_infos->webconfig_id:''}}">
                        @csrf
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input class="form-control" id="company_name" name="company_name" type="text" placeholder="Enter Company Name" required value="{{!empty($web_infos->company_name)?$web_infos->company_name:''}}">
                        </div>
                        <div class="form-group">
                            <label for="company_logo">Company Logo</label>
                            <input class="form-control" id="company_logo" name="company_logo" type="file"> <br>
                            <img src="{{!empty($web_infos->company_logo)?$web_infos->company_logo:''}}" id="blah" height="100px" width="250px" alt="Website Logo">
                        </div>
                        <div class="form-group">
                            <label for="company_email">Company Email</label>
                            <input class="form-control" id="company_email" name="company_email" type="email" placeholder="Enter Company Email" required value="{{!empty($web_infos->company_email)?$web_infos->company_email:''}}">
                        </div>
                        <div class="form-group">
                            <label for="phone_1">Phone 1</label>
                            <input class="form-control" id="phone_1" name="phone_1" type="text" parsley-trigger="change"  placeholder="Enter Phone Number 1" pattern="\d*" maxlength="15" minlength="11"  value="{{!empty($web_infos->phone_1)?$web_infos->phone_1:''}}" required>

                        </div>
                        <div class="form-group">
                            <label for="phone_2">Phone 2</label>
                            <input class="form-control" id="phone_2" name="phone_2" type="text" parsley-trigger="change" pattern="\d*" maxlength="15"  maxlength="11" placeholder="Enter Phone Number 2" value="{{!empty($web_infos->phone_2)?$web_infos->phone_2:''}}" required>
                        </div>
                        <div class="form-group">
                            <label for="company_address">Company Address</label>
                            <textarea class="form-control" name="company_address" rows="4">{{!empty($web_infos->company_address)?$web_infos->company_address:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="google_map_code">Google Map Code</label>
                            <input class="form-control" id="google_map_code" name="google_map_code" type="text" placeholder="Enter Google Map Code" required value="{{!empty($web_infos->google_map_code)?$web_infos->google_map_code:''}}">
                        </div>
                        <div class="form-group">
                            <label for="social_link">Social Link</label>
                            <input class="form-control" id="social_link" name="social_link" type="url" placeholder="https://www.example.com" required value="{{!empty($web_infos->social_link)?$web_infos->social_link:''}}">
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{url('/dashboard')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('custom_script')
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#company_logo").change(function(){
                    readURL(this);
                });
            </script>
            @if(Session::has('success'))
                <script>
                    swal({
                        title: "Success!",
                        text: "{{Session::get('success')}}",
                        type: "success",
                        timer: 1000
                    });
                </script>
    @endif
@endsection



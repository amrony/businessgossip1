@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Change Password</h3></label>
                        {{--                        <a href="" class="btn btn-info pull-right">View Info</a>--}}
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('password_update') }}" method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group row">
                        <label for="old_password" class="control-label col-md-3">Old Password :</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" id="old_password" name="old_password"
                                   placeholder="Enter old password">
                            <span class="text-danger">{{ $errors->has('old_password') ? $errors->first('old_password') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="control-label col-md-3">New Password :</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" name="password"
                                   placeholder="Enter new password">
                            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="control-label col-md-3">Confirm Password :</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" id="password_confirmation"
                                   name="password_confirmation"
                                   placeholder="Enter Confirm Password">
                            <span class="text-danger">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

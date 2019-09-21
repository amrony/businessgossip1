@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Create User</h3></label>
                        <a href="{{ route('view-user') }}" class="btn btn-info pull-right">View User</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('add-user') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="control-label col-md-3">User Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name" placeholder="Enter User Name ">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-8">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Password</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" name="password" placeholder="Enter Password">
                            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3">Status</label>
                        <div class="col-md-8 radio">
                            <label><input type="radio" name="status" checked value="1">Active</label>
                            <label><input type="radio" name="status" value="0">Inactive</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="btn" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
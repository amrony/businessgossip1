@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Add Company Info</h3></label>
                        <a href="{{ route('company.index') }}" class="btn btn-info pull-right">View Info</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('company.store') }}" method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="control-label col-md-3">Company Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Enter company name">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="email" name="email" placeholder="Enter email address">
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="number"  placeholder="Enter Phone Number">
                            <span class="text-danger">{{ $errors->has('number') ? $errors->first('number') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="6" id="editor" name="address"></textarea>
                            <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="6" id="editor" name="description"></textarea>
                            <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3">Logo</label>
                        <div class="col-md-9">
                            <input type="file" name="logo" accept="image/*">
                            <span class="text-danger">{{ $errors->has('logo') ? $errors->first('logo') : '' }}</span>
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
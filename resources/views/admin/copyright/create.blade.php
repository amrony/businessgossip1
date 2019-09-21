
@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Add Copy Right Info</h3></label>
                        <a href="{{ route('copyright.index') }}" class="btn btn-info pull-right">View Copy Right
                            Info</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('copyright.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="control-label col-md-3">Company Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name" placeholder="Enter company name">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3">Year</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="year"  placeholder="Enter Year">
                            <span class="text-danger">{{ $errors->has('year') ? $errors->first('year') : '' }}</span>
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
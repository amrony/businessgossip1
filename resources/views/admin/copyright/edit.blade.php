@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Copy Right Info</h3></label>
                        <a href="{{ route('copyright.index') }}" class="btn btn-info pull-right">View Copy Right</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('copyright.update',$copyRight->id) }}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $copyRight->id }}">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Company Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name" value="{{ $copyRight->name }}">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3">Year</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="year" value="{{ $copyRight->year }}">
                            <span class="text-danger">{{ $errors->has('year') ? $errors->first('year') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="btn" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Article Category</h3></label>
                        <a href="{{ route('view-article-category') }}" class="btn btn-info pull-right">View Article Category</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('update-article-category') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label class="control-label col-md-3">Article Category Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name" value="{{ $articleCategory->name }}">
                            <input class="form-control" type="hidden" name="article_id" value="{{ $articleCategory->id }}">
                            <span class="text-danger">{{ $errors->has('number') ? $errors->first('number') : '' }}</span>
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
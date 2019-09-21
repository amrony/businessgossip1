@extends('admin.master')
@section('body')
    <div class="col-md-12">
        {{--        @if (session('message'))--}}
        {{--            <div class="alert alert-success alert-dismissable fade in">--}}
        {{--                {{ session('message') }}--}}
        {{--            </div>--}}
        {{--        @endif--}}
    </div>
    <div class="tile">
        <div class="tile-title">
            <div class="row">
                <div class="col-md-12">
                    <label><h3>Update Page</h3></label>
                    <a href="{{ route('page.index') }}" class="btn btn-info pull-right">View Page</a>
                    <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                </div>
            </div>
        </div>
        <div class="tile-body col-md-10 m-auto">
            <form class="form-horizontal" action="{{ route('page.update', $page->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control" type="hidden" value="{{ $page->id }}" name="page_id">

                <div class="form-group row">
                    <label class="control-label col-md-2">Page Name</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="{{ $page->name }}" name="name">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Title</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="{{ $page->title }}" name="title">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Keyword</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="5" name="keyword">{{ $page->keyword }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Meta Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="5" name="description">{{ $page->description }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Slug</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" value="{{ $page->slug }}" name="slug">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Body</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="editor" name="body">{{ $page->body }}</textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="control-label col-md-2">Status</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" name="status" value="1" {{ $page->status == 1 ? 'checked' : '' }}>Active</label>
                        <label><input type="radio" name="status" value="0" {{ $page->status == 0 ? 'checked' : '' }}>Inactive</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2"></label>
                    <div class="col-md-9">
                        <button class="btn btn-success" name="btn" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
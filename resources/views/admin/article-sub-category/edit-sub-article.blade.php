@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Article Subcategory</h3></label>
                        <a href="{{ route('view-article-sub-category') }}" class="btn btn-info pull-right">View Article Subcategory</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>

{{--            @dd($articleCategories);--}}
            <div class="tile-body col-md-10 m-auto">
                <form class="form-horizontal" action="{{ route('update-article-sub-category') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="control-label col-md-3">Article Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="article_category_id" required="required">
                                <option>--Select Category--</option>
                                @foreach($articleCategories as $articleCategory)
                                    <option value="{{ $articleCategory->id }}"{{ ($articleCategory->id == $subCategory->article_category_id) ? 'selected' : '' }}>{{ $articleCategory->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('article_category_id') ? $errors->first('article_category_id') :'' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Sub Category Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name" value="{{ $subCategory->name }}">
                            <input class="form-control" type="hidden" name="sub_category_id" value="{{ $subCategory->id }}">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
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
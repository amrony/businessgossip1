@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('question.index') }}" class="btn btn-primary m-t-15 waves-effect">View All
                Question</a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Update Question</h3>
            <div class="tile-body">
                <form action="{{ route('question.update', $community->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $community->id }}">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="control-label">Business Category</label>
                            <select class="form-control" name="article_category_id" required="required">
                                <option value="0">---Select Business Category---</option>
                                @foreach($articleCategories as $articleCategory)
                                    <option value="{{ $articleCategory->id }}"{{ $articleCategory->id ==
                                    $community->article_category_id ? 'selected' : ''
                                    }}>{{
                                    $articleCategory->name
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Business Sub Category</label>
                            <select class="form-control" name="article_sub_category_id" required="required">
                                <option value="0">---Select Business Sub Category---</option>
                                @foreach($articleSubcategories as $articleSubCategory)
                                    <option value="{{ $articleSubCategory->id }}"{{ $articleSubCategory->id ==
                                    $community->article_sub_category_id ? 'selected' : '' }}>{{
                                    $articleSubCategory->name
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Question</label>
                        <textarea class="form-control" rows="4" name="question">{{ $community->question }}</textarea>
                        <span class="text-danger">{{ $errors->has('question') ? $errors->first('question') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea class="form-control" rows="6" name="description" placeholder="" >{{
                        $community->description }}</textarea>
                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tag</label>
                        <input class="form-control" type="text" name="tag" value="{{ $community->tag }}">
                        <span class="text-danger">{{ $errors->has('tag') ? $errors->first('tag') : '' }}</span>
                    </div>


                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@section('js_attach')

@endsection


@endsection




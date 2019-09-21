@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            {{--        <a href="" class="btn btn-danger m-t-15 waves-effect">Back</a>--}}
{{--            <a class="btn btn-primary waves-effect" href="{{ route('view-article-news') }}">--}}
            <a href="{{ route('article-category.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
            </a>
        </div>
        <div class="tile">
            <h3 class="tile-title">Update News</h3>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
            <div class="tile-body">
                <form action="{{ route('article-category.update', $articleCategoryNews->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $articleCategoryNews->title }}"  placeholder="Enter Title">
                            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Sub Title</label>
                            <input class="form-control" type="text" name="sub_title" value="{{ $articleCategoryNews->sub_title }}"  placeholder="Enter Title">
                            <span class="text-danger">{{ $errors->has('sub_title') ? $errors->first('sub_title') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Body</label>
                            <textarea class="form-control" rows="8" name="body" placeholder="" >{{ $articleCategoryNews->body }}</textarea>
                            <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                        </div>
                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@section('js_attach')

    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>

    <script src="{{ asset('js/repeater/jquery.repeater.js') }}"></script>

    <script>
        $(document).ready(function () {
            'use strict';

            $('.repeater').repeater({
                // defaultValues: {
                //     'textarea-input': 'foo',
                //     'text-input': 'bar[]',
                //     'select-input': 'B',
                //     'checkbox-input': ['A', 'B'],
                //     'radio-input': 'B'
                // },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                ready: function (setIndexes) {

                }
            });

        });
    </script>

@endsection

@endsection
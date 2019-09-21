@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            {{--        <a href="" class="btn btn-danger m-t-15 waves-effect">Back</a>--}}
{{--            <a class="btn btn-primary waves-effect" href="{{ route('view-article-news') }}">--}}
            <a href="" class="btn btn-primary m-t-15 waves-effect">View News</a>
            </a>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add News</h3>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
            <div class="tile-body">
                <form action="{{ route('news.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="repeater">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <input class="form-control" type="text" name="title"  placeholder="Enter Title">
                                    <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Sub Title</label>
                                    <input class="form-control" type="text" name="sub_title"  placeholder="Enter Title">
                                    <span class="text-danger">{{ $errors->has('sub_title') ? $errors->first('sub_title') : '' }}</span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Body</label>
                                    <textarea class="form-control" rows="8" name="body" placeholder="" ></textarea>
                                    <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label">Image</label>--}}
{{--                                    <input class="form-control col-md-6" type="file">--}}
{{--                                </div>--}}

                                <a class="btn btn-danger btn-sm" data-repeater-delete style="margin-bottom: 8px;">
                                    <span class="fa fa-trash-o"></span>
                                </a>
{{--                                <button style="margin-bottom: 8px" class="btn btn-danger" data-repeater-delete type="button">Delete</button>--}}
                            </div>
                        </div>
                        <div class="float-right" style="margin-bottom: 10px">
                            <input class="btn btn-info" data-repeater-create type="button" value="+"/>
                        </div>
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Submit</button>
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
@extends('admin.master')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('buying-advice.index') }}" class="btn btn-primary m-t-15 waves-effect">View All Buying
                Advice</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add Buying Advice</h3>
            <div class="tile-body">
                <form action="{{ route('buying-advice.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="control-label">Business Category</label>
                            <select class="form-control" name="article_category_id" required="required">
                                <option value="0">---Select Business Category---</option>
                                @foreach($articleCategories as $articleCategory)
                                    <option value="{{ $articleCategory->id }}">{{ $articleCategory->name }}</option>
                                    @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('article_category_id') ? $errors->first('article_category_id') : '' }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Business Sub Category</label>
                            <select class="form-control" name="article_sub_category_id" required="required">
                                <option value="0">---Select Business Sub Category---</option>
                                @foreach($articleSubCategories as $articleSubCategory)
                                    <option value="{{ $articleSubCategory->id }}">{{ $articleSubCategory->name
                                    }}</option>
                                    @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('article_sub_category_id') ? $errors->first('article_sub_category_id') : '' }}</span>
                        </div>
                    </div>
{{--                    @dd($businessProfileArticles);--}}
                    <div class="form-group">
                        <label class="control-label">Suggest Product & Service</label>
                        <select class="form-control select2" name="business_profile_article_id[]" multiple="multiple">
                            <option value="0">---Select Business Category---</option>
                            @foreach($businessProfileArticles as $businessProfileArticle)
                            <option value="{{ $businessProfileArticle->id }}">{{ $businessProfileArticle->title
                            }}</option>
                                @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->has('business_profile_article_id') ? $errors->first('business_profile_article_id') : '' }}</span>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title"  placeholder="Enter Title">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Body</label>
                        <textarea class="form-control" rows="8" name="body" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control" name="image" type="file">
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                    </div>

                    <div class="additional_news" style="padding-top: 20px;">
                        <h3 class="tile-title">Additional Buying Advice</h3>
                        <div class="repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" type="text" name="additional_title"
                                               placeholder="Enter Title">
                                        <span class="text-danger">{{ $errors->has('additional_title') ?
                                        $errors->first('additional_title') : '' }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Body</label>
                                        <textarea class="form-control" rows="8" name="additional_body"
                                                  placeholder="" ></textarea>
                                        <span class="text-danger">{{ $errors->has('additional_body') ?
                                        $errors->first('additional_body') : '' }}</span>
                                    </div>
                                    <a class="btn btn-danger float-right" data-repeater-delete style="margin-bottom: 8px;">
                                        <span class="fa fa-trash-o"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="float-right" style="margin-bottom: 10px; padding-right: 5px;">
                                <input class="btn btn-info" data-repeater-create type="button" value="+"/>
                            </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>

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


        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endsection


@endsection

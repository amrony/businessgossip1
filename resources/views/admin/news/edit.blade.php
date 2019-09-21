@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            {{--        <a href="" class="btn btn-danger m-t-15 waves-effect">Back</a>--}}
            {{--            <a class="btn btn-primary waves-effect" href="{{ route('view-article-news') }}">--}}
            <a href="{{ route('news.index') }}" class="btn btn-primary m-t-15 waves-effect">View News</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Update News</h3>
            <div class="tile-body">
                <form action="{{ route('news.update', $news->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $news->id }}">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="control-label">Article Category</label>
                            <select class="form-control" name="article_category_id" required="required">
                                <option>---Select Article Category---</option>
                                @foreach($articleCategories as $articleCategory)
                                    <option value="{{ $articleCategory->id }}"{{ $articleCategory->id == $news->article_category_id ? 'selected' : '' }}>{{ $articleCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Article Sub Category</label>
                            <select class="form-control" name="article_sub_category_id" required="required">
                                <option>---Select Article Sub Category---</option>
                                @foreach($articleSubCategories as $articleSubCategory)
                                    <option value="{{ $articleSubCategory->id }}" {{ $articleSubCategory->id == $news->article_sub_category_id ? 'selected' : '' }}>{{ $articleSubCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $news->title }}">
                            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Body</label>
                            <textarea class="form-control" rows="8" name="body">{{ $news->body }}</textarea>
                            <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cover Photo</label>
                            <input class="form-control col-md-6" name="image" type="file"></br>
                            <img class="img-responsive thumbnail" src="{{ url('storage/news/'.$news->image) }}" height="100" width="150">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Icon</label>
                            <input class="form-control col-md-6" name="icon" type="file"></br>
                            <img class="img-responsive thumbnail" src="{{ url('storage/icon/'.$news->icon) }}" height="100" width="150">
                        </div>


                    <div class="body">
                        <div class="r-group">
                            <div class="additional_news" style="padding-top: 20px;">
                                <h3 class="tile-title">Additional News</h3>
                                    @foreach($news->additional_news as $add_news)
                                        <input type="hidden" name="additional_news_id[]" value="{{ $add_news->id }}">
                                    <div data-repeater-item>
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input class="form-control" type="text" name="additional_title[]" value="{{ $add_news->title }}">
                                            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Body</label>
                                            <textarea class="form-control" rows="8" name="additional_body[]" placeholder="" >{{ $add_news->body }}</textarea>
                                            <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                                        </div>
                                    </div>
									@endforeach
                            </div>

                            <a class="btn btn-danger float-right r-btnRemove" data-repeater-delete style="margin-bottom: 8px;">
                                <span class="fa fa-trash-o"></span>
                            </a>

                            <div class="float-right" style="margin-bottom: 10px; padding-right: 5px;">
                                <input class="btn btn-info r-btnAdd" type="button" value="+"/>
                            </div>
                        </div>
						<div id="edit_add">
						</div>
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





@section('js_attach')
<!--    <script src="{{ asset('js/repeater/jquery.form-repeater.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jquery.form-repeater.js"></script>-->
    <script>
        /*$('.body').repeater({
            btnAddClass: 'r-btnAdd',
            btnRemoveClass: 'r-btnRemove',
            groupClass: 'r-group',
            minItems: 1,
            maxItems: 0,
            startingIndex: 0,
            showMinItemsOnLoad: false,
            reindexOnDelete: true,
            repeatMode: 'append',
            animation: null,
            animationSpeed: 400,
            animationEasing: 'swing',
            clearValues: true
        }
		,
        [
                @foreach($news->additional_news as $add_news)
            {
                "additional_news_id[]": '{{ $add_news->id }}',
                "additional_title[]": '{{ $add_news->title }}',
                "additional_body[]": '{{ $add_news->title }}',
                // "vehicle[0][type]": "type1"
            },
            @endforeach
        ]
		
		);*/
		
		$(document).ready(function(){
		
			
		
			$('.r-btnAdd').on('click', function(){
			var newDiv = '<div id="added_new_div"><div class="form-group">'+
                                            '<label class="control-label">Title</label>'+
                                            '<input class="form-control" type="text" name="add_additional_title[]">'+
                                            
                                        '</div>'+

                                        '<div class="form-group">'+
                                            '<label class="control-label">Body</label>'+
                                            '<textarea class="form-control" rows="8" name="add_additional_body[]" placeholder="" ></textarea>'+
                                            '<span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>'+
                                        '</div></div>';

		
				$('#edit_add').append(newDiv);
			});
			
			
			$('.r-btnRemove').on('click', function(){
				$('#edit_add #added_new_div:last').remove();
			});
		});
    </script>

@endsection


    @endsection

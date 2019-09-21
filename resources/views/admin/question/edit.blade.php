{{--@extends('admin.master')--}}

{{--@section('body')--}}
{{--<div class="container">--}}
{{--<div class="col-md-12">--}}
{{--    <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>--}}
{{--    <div class="row">--}}
{{--        <div style="padding: 20px; margin: 0 0 0 -31px;">--}}
{{--            <div style="margin-right: 5px; float: left;">--}}
{{--                <a href="{{ route('question.index') }}" class="btn btn-danger m-t-15 waves-effect">--}}
{{--                    <i class="fa fa-backward"></i>--}}
{{--                    <span>Back</span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            @if($community->is_approved == false)--}}
{{--            <button type="button" id="approve_button" class="btn btn-success waves-effect"--}}
{{--                    onclick="return confirm('Are You Sure Approved This Comment :( ')">--}}
{{--                <i class="fa fa-check-circle"></i>--}}
{{--                <span>Approve</span>--}}
{{--            </button>--}}
{{--                <form id="question-ans" method="post" action="{{ route('question-approve',$community->id)--}}
{{--                }}"--}}
{{--                       style="display: none;">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    <input type="hidden" name="id" value="{{ $community->id }}">--}}
{{--                </form>--}}
{{--            @else--}}
{{--                <button type="button" class="btn btn-success waves-effect" disabled onclick="approvePost()">--}}
{{--                    <i class="fa fa-check-circle"></i>--}}
{{--                    <span>Approved</span>--}}
{{--                </button>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--    <div class="col-md-12 bg-primary" style="height: 50px;padding: 6px;float: left; text-align: center;margin-left: -14px; margin-bottom:--}}
{{--    15px;">--}}
{{--        <h3>Question Show</h3>--}}
{{--    </div>--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="col-md-8" style="background-color: #EFCAC3; margin-left: -28px; padding: 15px; float:--}}
{{--        left;">--}}
{{--            <div class="col-md-12">--}}
{{--                <label class="control-label"><h3>Question</h3></label>--}}
{{--                <h5>--}}
{{--                    {!! $community->question !!} <br>--}}
{{--                    <small>Question By <strong> <a href="">{!! $community->profile->name !!} </a></strong>--}}
{{--                        on {!! $community->created_at->toFormattedDateString() !!}</small>--}}
{{--                </h5>--}}
{{--            </div>--}}
{{--            <div class="col-md-12">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4" style="background-color: #EFCAC3;padding-bottom: 50px; float:right;">--}}
{{--            <h3 class="control-label">Business Category</h3>--}}
{{--            <select class="form-control" name="article_category_id" required="required">--}}
{{--                <option value="0">---Select Business Category---</option>--}}
{{--                @foreach($articleCategories as $articleCategory)--}}
{{--                    <option value="{{ $articleCategory->id }}"--}}
{{--                            {{ $articleCategory->id == $community->article_category_id ? 'selected' : ''--}}
{{--                            }}>{{--}}
{{--                            $articleCategory->name--}}
{{--                            }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}


{{--            <h3 class="control-label">Business SubCategory</h3>--}}
{{--            <select class="form-control" name="article_sub_category_id" required="required">--}}
{{--                <option value="0">---Select Business Sub Category---</option>--}}
{{--                @foreach($articleSubcategories as $articleSubCategory)--}}
{{--                    <option value="{{ $articleSubCategory->id }}" {{ $articleSubCategory->id ==--}}
{{--                            $community->article_sub_category_id ? 'selected' : '' }}>{{--}}
{{--                            $articleSubCategory->name--}}
{{--                            }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-md-12" style="padding: 25px; margin: 17px 0px 0px -14px; background-color: #EFCAC3;--}}
{{--    margin-bottom: 20px; float: left">--}}
{{--        <h3>Description</h3>--}}
{{--        <P>{{ $community->description }}</P>--}}
{{--    </div>--}}

{{--</div>--}}





{{--@section('js_attach')--}}

{{--   <script>--}}
{{--       $('#approve_button').click(function(){--}}
{{--           $('#question-ans').submit();--}}
{{--       });--}}
{{--   </script>--}}
{{--@endsection--}}


{{--@endsection--}}



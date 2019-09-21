@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('profile-article.index') }}" class="btn btn-primary m-t-15 waves-effect">All Product &
                Service</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
{{--        @dd($businessProfiles);--}}
        <div class="tile">
            <h3 class="tile-title">Add Product & Service</h3>
            <div class="tile-body">
                <form action="{{ route('profile-article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <select class="form-control" name="business_profile_id" required="required">
                            <option>---Select Company Name---</option>
                            @foreach($businessProfiles as $businessProfile)
                                <option value="{{ $businessProfile->id }}">{{ $businessProfile->name }}</option>
                                @endforeach
                            <span class="text-danger">{{ $errors->has('business_profile_id') ? $errors->first('business_profile_id') : '' }}</span>
                        </select>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Product/Service</label>
                        <input class="form-control" type="text" name="title">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Short Description</label>
                        <textarea class="form-control" rows="6" name="short_description" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Long Description</label>
                        <textarea class="form-control" rows="8" name="long_description" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control col-md-6" name="image" type="file">
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@section('js_attach')

@endsection


@endsection



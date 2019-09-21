@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('business-profile.index') }}" class="btn btn-primary m-t-15 waves-effect">View All
                Business Profile</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add Business Profile</h3>
            <div class="tile-body">
                <form action="{{ route('business-profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input class="form-control" type="text" name="name"  placeholder="Enter company name">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="email" name="email"  placeholder="Enter your email.">
                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Link</label>
{{--                        <input class="form-control" type="text" name="link"  placeholder="Enter Link">--}}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">link</div>
                            </div>
                            <input type="text" class="form-control" name="link" id="inlineFormInputGroup"
                                   placeholder="Enter Link">
                        </div>
                        <span class="text-danger">{{ $errors->has('link') ? $errors->first('link') : '' }}</span>
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
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
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



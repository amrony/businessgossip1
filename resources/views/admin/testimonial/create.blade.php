@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('testimonial.index') }}" class="btn btn-primary m-t-15 waves-effect">View Testimonial</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add Testimonial</h3>
            <div class="tile-body">
                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" type="text" name="name"  placeholder="Enter Name">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <input class="form-control" type="text" name="designation"  placeholder="Enter Designation">
                        <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control col-md-6" name="image" type="file">
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title"  placeholder="Enter title">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : ''
                        }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea class="form-control" rows="6" name="description" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                    </div>



                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


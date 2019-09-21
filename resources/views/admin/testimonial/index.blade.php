@extends('admin.master')

@section('body')
    {{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
{{--            <a href="{{ route('testimonial.create') }}" class="btn btn-danger m-t-15 waves-effect">Add testimonial</a>--}}
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">All Testimonial</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonials as $key=>$testimonial)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>
                                <img src="{{ url('storage/testimonial',$testimonial->image) }}" height="100" width="80">
                            </td>
                            <td>{{ $testimonial->title }}</td>
                            <td>{{ str_limit($testimonial->description,15) }}</td>
                            <td>
                                <a href="{{ route('testimonial.edit',$testimonial->id) }}" class="btn btn-success
                                btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>
{{--                                {{ route('about_us.delete', $about->id) }}--}}
                                <a href="{{ route('testimonial-delete',$testimonial->id) }}" class="btn
                                btn-danger btn-sm"
                                   onclick="return confirm('Are You Sure Delete This !')">
                                    <span class="fa fa-trash-o"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@section('js_attach')

@endsection


@endsection





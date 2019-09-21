@extends('admin.master')

@section('body')
{{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('business-profile.create') }}" class="btn btn-danger m-t-15 waves-effect">Add Business
                Profile
            </a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">View Business Profile</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Link</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th>Image</th>
                        <th width="15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($businessProfiles as $key=>$businessProfile)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $businessProfile->name }}</td>
                            <td>{{ $businessProfile->email }}</td>
                            <td>{{ $businessProfile->link }}</td>
                            <td>{{ str_limit($businessProfile->short_description,10) }}</td>
                            <td>{{ str_limit($businessProfile->long_description,20) }}</td>
                            <td>
                                <img src="{{ url('storage/company-profile/', $businessProfile->image) }}" height="50"
                                     width="70">
                            </td>
                            <td>
                                <a href="{{ route('business-profile.edit',$businessProfile->id) }}" class="btn
                                btn-success btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>

                                <a href="{{ route('business-profile.delete',$businessProfile->id) }}" class="btn
                                btn-danger btn-sm"
                                   onclick="return confirm('Are You ' +
                                 'Sure ' +
                                 'Delete This !')">
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




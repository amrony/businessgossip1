@extends('admin.master')

@section('body')
{{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('profile-article.create') }}" class="btn btn-danger m-t-15 waves-effect">Add Product & Service</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">View Product & Service</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Company Name</th>
                        <th>Product/Service</th>
                        <th>Short Description</th>
                        <th>Long Description</th>
                        <th width="15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profileArticles as $key=>$profileArticle)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $profileArticle->business_profile->name }}</td>
                            <td>{{ $profileArticle->title }}</td>
                            <td>{{ str_limit($profileArticle->short_description, 10) }}</td>
                            <td>{{ str_limit($profileArticle->long_description, 10) }}</td>
                            <td>
                                <a href="{{ route('profile-article.edit',$profileArticle->id) }}" class="btn btn-success
                                 btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>

                                <a href="{{ route('profile-article.delete', $profileArticle->id) }}" class="btn
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




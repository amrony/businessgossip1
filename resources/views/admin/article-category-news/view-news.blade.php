@extends('admin.master')
@section('body')

    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
                    <a href="{{ url('/article-category/create') }}" class="btn btn-danger m-t-15 waves-effect">Back</a>
        </div>
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>View News</h3></label>
{{--                        <a href="" class="btn btn-info pull-right">Add Sub Category</a>--}}
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body">
                <div class="row">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Body</th>
                            <th width="20%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articleCategories as $key => $articleCategory )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $articleCategory->title }}</td>
                                <td>{{ $articleCategory->sub_title }}</td>
                                <td>{{ $articleCategory->body }}</td>
                                <td>
                                    <a href="{{ route('article-category.edit', $articleCategory->id) }}" class="btn btn-success btn-sm">
                                        <span class="fa fa-pencil-square-o fa-3x"></span>
                                    </a>

                                    <a href="{{ route('article-category-delete', $articleCategory->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !')">
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
    </div>
    <!-- Data table plugin-->
    <script src="{{ asset('/') }}admin/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection

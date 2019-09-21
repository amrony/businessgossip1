@extends('admin.master')
@section('body')

    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('news.create') }}" class="btn btn-danger m-t-15 waves-effect">Back</a>
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
                            <th>body</th>
                            <th>News Image</th>
                            <th>News Icon</th>
                            <th>Created At</th>
                            <th width="20%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $key => $postNews )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $postNews->title }}</td>
                                <td>{{ substr($postNews->body,0 ,15) }}</td>
                                <td>
                                    <img class="img-responsive thumbnail" src="{{ url('storage/news/'.$postNews->image) }}" height="100" width="120">
                                </td>

                                <td>
                                    <img class="img-responsive thumbnail" src="{{ url('storage/icon/'.$postNews->icon) }}" height="100" width="120">
                                </td>

                                <td>{{ $postNews->created_at }}</td>

                                <td>
                                    <a href="{{ route('news.edit',$postNews->id) }}" class="btn btn-success btn-sm">
                                        <span class="fa fa-pencil-square-o fa-3x"></span>
                                    </a>

                                    <a href="{{ route('news-delete', $postNews->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !')">
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


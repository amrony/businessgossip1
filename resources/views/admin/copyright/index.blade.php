@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>All Copy Right</h3></label>
                        <a href="{{ route('copyright.create') }}" class="btn btn-info pull-right">Add Copy Right</a>
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
                            <th>Company Name</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($copyrights as $key=>$copyright)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $copyright->name }}</td>
                                <td>{{ $copyright->year }}</td>
                                <td>
                                    <a href="{{ route('copyright.edit',$copyright->id) }}" class="btn btn-success
                                    btn-sm">
                                        <span class="fa fa-pencil-square-o fa-3x"></span>
                                    </a>

                                    <a href="{{ route('delete-copyright', $copyright->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !')">
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

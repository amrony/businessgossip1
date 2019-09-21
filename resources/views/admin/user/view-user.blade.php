 @extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>User Info</h3></label>
                        {{--                        <a href="{{ route('add-company') }}" class="btn btn-info pull-right">Add Company Info</a>--}}
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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th width="15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Demo</td>
                                <td>Demo</td>
                                <td>Demo</td>
                                <td>
                                    <img src="" alt="" height="80" width="130">
                                </td>

                                </td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">
                                        <span class="fa fa-pencil-square-o fa-3x"></span>
                                    </a>

                                    <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !')">
                                        <span class="fa fa-trash-o"></span>
                                    </a>
                                </td>


                            </tr>

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


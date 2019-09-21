@extends('admin.master')

@section('body')
    {{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('buying-advice.create') }}" class="btn btn-danger m-t-15 waves-effect">Add Buying
                Advice
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
                        <th>Product & Service</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th width="15%">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($buyingAdvices as $key=>$buyingAdvice)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $buyingAdvice->business_profile_article->title }}</td>
                            <td>
                                <img src="{{ url('storage/buying_advice/', $buyingAdvice->image) }}" height="50"
                                     width="70">
                            </td>
                            <td>{{ str_limit($buyingAdvice->title, 15) }}</td>
                            <td>{{ str_limit($buyingAdvice->body, 20) }}</td>
                            <td>
                                <a href="{{ route('buying-advice.edit',$buyingAdvice->id) }}" class="btn
                                btn-success btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>

                                <a href="{{ route('buying-advice.delete',$buyingAdvice->id) }}" class="btn btn-danger
                                btn-sm"
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




@extends('admin.master')

@section('body')
    {{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
{{--            <a href="" class="btn btn-danger m-t-15 waves-effect">Add testimonial</a>--}}
{{--            </a>--}}
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">All Question
                <span class="badge bg-primary">{{ $communities->count() }}</span>
            </h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Question</th>
                        <th>Description</th>
                        <th>Is Approved</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($communities as $key => $community)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $community->profile->name }}</td>
                            <td>{{ str_limit($community->question, 25) }}</td>
                            <td>{{ str_limit($community->description, 25) }}</td>
                            <td>
                                @if($community->is_approved == true)
                                   <h3> <span class="badge bg-success">Published</span></h3>
                                    @else
                                    <h3><span class="badge bg-danger">Pending</span></h3>
                                @endif
                            </td>
                            <td>{{ $community->created_at }}</td>
                            <td>
                                @if($community->is_approved == false)
                                    <button type="button" id="approve_button" class="btn btn-success waves-effect"
                                            onclick="return confirm('Are You Sure Approved This Question :( ')">
                                        <i class="fa fa-check-circle"></i>
                                        <span>Approve</span>
                                    </button>
                                    <form id="question-ans" method="post" action="{{ route('question-approve',$community->id)
                }}"
                                          style="display: none;">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $community->id }}">
                                    </form>
                                @else
                                    <button type="button" class="btn btn-success waves-effect" disabled onclick="approvePost()">
                                        <i class="fa fa-check-circle btn-sm"></i>
                                        <span>Approved</span>
                                    </button>
                                @endif

{{--                                <a href="{{ route('question.edit', $community->id) }}" class="btn btn-success btn-sm">--}}
{{--                                    <span class="fa fa-eye"></span>--}}
{{--                                </a>--}}

                                <a href="{{ route('question.show', $community->id) }}" class="btn btn-primary btn-sm">
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>

                                <a href="{{ route('question-delete', $community->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This !')">
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
    <script>
        $('#approve_button').click(function(){
            $('#question-ans').submit();
        });
    </script>
@endsection


@endsection





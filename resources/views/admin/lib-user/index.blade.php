@extends('admin.lib-user.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Library Users</h3>
            </div>
            <div class="module-body">
                <table class="table table-hover">
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Organization</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data_list as $data)
                        <tr>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->org_details }}</td>
                            <td>
                                @if($data->training_code == null)
                                    {!! Form::open(['method' => 'DELETE', 'url' => url('admin', ['lib-user', $data->id])]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @else
                                    Trainee
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@stop
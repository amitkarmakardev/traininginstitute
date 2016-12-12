@extends('admin.library.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Retrieve Books</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <tr>
                        <th>Book</th>
                        <th>Issued to</th>
                        <th>Issued At</th>
                        <th>Retrieve</th>
                    </tr>
                    @foreach($data_list as $data)
                        <tr>
                            <td>{{ $data->book->title }}</td>
                            <td>{{ $data->libUser->getDetails() }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                {!! Form::open(['method' => 'PATCH', 'url' => url('admin', ['library', 'retrieve'])]) !!}
                                {!! Form::hidden('id', $data->id) !!}
                                {!! Form::submit('Retrieve', ['class' => 'btn btn-info']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
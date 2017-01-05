@extends('admin.library.layout')

@section('left')
    <div class="content">
        <div class="module">

            <div class="module-head">
                <h3>Recently Issued Books</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <tr>
                        <th>Book</th>
                        <th>Issued to</th>
                        <th>Issued At</th>
                        <th>Retrieved At</th>
                    </tr>
                    @foreach($data_list as $data)
                        <tr>
                            <td>{{ $data->book->title }}</td>
                            <td>{{ $data->libUser->getDetails() }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->retrieved_at }}</td>
                        </tr>
                    @endforeach
                </table>
                {!! $data_list->render() !!}
            </div>
        </div>
    </div>
@stop
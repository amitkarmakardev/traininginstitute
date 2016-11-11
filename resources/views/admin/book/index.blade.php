@extends('admin.book.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Book List</h3>
            </div>
            <div class="module-body">
                {!! Form::open(['url' => url('admin', ['book', 'search']), 'class' => 'form-horizontal row-fluid']) !!}
                <div class="control-group">
                    {!! Form::text('id', null, ['class' => 'span1', 'placeholder' => 'ID']) !!}
                    {!! Form::text('isbn', null, ['class' => 'span3', 'placeholder' => 'ISBN']) !!}
                    {!! Form::text('title', null, ['class' => 'span3', 'placeholder' => 'Title']) !!}
                    {!! Form::text('author_details', null, ['class' => 'span4', 'placeholder' => 'Author']) !!}
                    {!! Form::submit('Search', ['class' => 'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
                <hr>
                <table class="table table-striped data-table">
                    <tr>
                        <th>ID</th>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Task</th>
                    </tr>

                    @foreach($data_list as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->isbn }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->author_details }}</td>
                            <td>Issued</td>
                            <td><a href="{{ url('admin', ['book', $data->id, 'edit']) }}" class="btn btn-info">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
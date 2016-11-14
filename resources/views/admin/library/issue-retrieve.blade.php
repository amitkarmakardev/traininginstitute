@extends('admin.library.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Issue Books</h3>
            </div>
            <div class="module-body">

                {!! Form::open(['method' => 'post', 'url' => url('admin', ['library', 'issue']), 'class' => 'form-horizontal row-fluid', 'autocomplete' => 'off']) !!}
                {!! Form::hidden('issued_at', null) !!}
                {!! Form::hidden('user', null) !!}
                <div class="control-group">
                    {!! Form::label('book_id', 'Book ID', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('book_id', null, ['class' => 'span2']) !!}
                        <a href="#" onclick="populateBookDetails()" style="text-decoration: none">&nbsp;&nbsp;>></a>
                        &nbsp;&nbsp;
                        <div class="help-inline" id="book-details"></div>

                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('lib_user_id', 'Issued To', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('lib_user_id', null, ['class' => 'span2']) !!}
                        <a href="#" onclick="populateLibUserDetails()" style="text-decoration: none">&nbsp;&nbsp;>></a>
                        &nbsp;&nbsp;
                        <div class="help-inline" id="lib-user-details"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        {!! Form::submit('Issue', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                <script>
                    function populateBookDetails() {
                        var book_id = $('#book_id').val();
                        $.ajax({
                            type: "GET",
                            url: "{{ url('ajax', ['book-details']) }}" + '/' + book_id,
                            async: false,
                            success: function (text) {
                                $('#book-details').html(text);
                            }
                        });
                    }

                    function populateLibUserDetails() {
                        var lib_user_id = $('#lib_user_id').val();
                        $.ajax({
                            type: "GET",
                            url: "{{ url('ajax', ['lib-user-details']) }}" + '/' + lib_user_id,
                            async: false,
                            success: function (text) {
                                $('#lib-user-details').html(text);
                            }
                        });
                    }
                </script>
            </div>
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
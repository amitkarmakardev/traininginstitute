@extends('admin.library.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Issue Books</h3>
            </div>
            <div class="module-body">

                {!! Form::open(['url' => '#', 'class' => 'form-horizontal row-fluid', 'id' => 'search-book-form']) !!}
                <div class="control-group">
                    {!! Form::text('id', null, ['class' => 'span1', 'placeholder' => 'ID']) !!}
                    {!! Form::text('isbn', null, ['class' => 'span3', 'placeholder' => 'ISBN']) !!}
                    {!! Form::text('title', null, ['class' => 'span3', 'placeholder' => 'Title']) !!}
                    {!! Form::text('author_details', null, ['class' => 'span4', 'placeholder' => 'Author']) !!}
                    <a href="#" onclick="populateBookSearchResult()" class="btn btn-success">Search</a>
                </div>
                {!! Form::close() !!}
                <br>
                <h5>1. Select Books</h5>
                <hr>
                {!! Form::open(['method' => 'post', 'url' => url('admin', ['library', 'issue']), 'class' => 'form-horizontal row-fluid', 'autocomplete' => 'off']) !!}

                {!! Form::hidden('issued_at', null) !!}
                {!! Form::hidden('user', null) !!}

                <table class="table table-striped data-table">
                    <thead>
                    <tr>
                        <th>Select</th>
                        <th>ID</th>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Author</th>
                    </tr>
                    </thead>

                    <tbody id="book-list">

                    </tbody>
                </table>
                <br>
                <h5>2. Select User</h5>
                <hr>
                <div class="control-group">
                    {!! Form::text('lib_user_id', null, ['class' => 'span2', 'id' => 'lib_user_id', 'placeholder' => 'User ID']) !!}
                    <a href="#" onclick="populateLibUserDetails()" style="text-decoration: none">&nbsp;&nbsp;>></a>
                    &nbsp;
                    <div class="help-inline" id="lib-user-details"></div>
                </div>
                <div class="control-group">
                    {!! Form::submit('Issue Book', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}


            </div>
            <div class="module-head">
                <h3>Recently Issued Books</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <tr>
                        <th>Book</th>
                        <th>Issued to</th>
                        <th>Issued At</th>
                    </tr>
                    @foreach($data_list as $data)
                        <tr>
                            <td>{{ $data->book->title }}</td>
                            <td>{{ $data->libUser->getDetails() }}</td>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

    <script>
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
        function populateBookSearchResult() {
            var inputs = $('#search-book-form').serialize();
            $.ajax({
                type: "GET",
                url: "{{ url('ajax', ['search-books']) }}" + "?" + inputs,
                async: false,
                success: function (text) {
                    $('#book-list').html(text);
                }
            });
        }
    </script>
@stop
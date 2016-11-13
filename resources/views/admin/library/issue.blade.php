@extends('admin.library.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Issue Books</h3>
            </div>
            <div class="module-body">

                {!! Form::open(['method' => 'post', 'url' => url('admin', ['library']), 'class' => 'form-horizontal row-fluid']) !!}
                <div class="control-group">
                    {!! Form::label('book_id', 'Book ID', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('book_id', null, ['class' => 'span2']) !!}
                        {!! Form::text('title', null, ['class' => 'span9', 'readonly' => 'true']) !!}
                        @if($errors->has('book_id'))
                            @foreach($errors->get('book_id') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('lib_user_id', 'Issued To', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('lib_user_id', null, ['class' => 'span2']) !!}
                        {!! Form::text('user_details', null, ['class' => 'span9', 'readonly' => 'true']) !!}
                        @if($errors->has('lib_user_id'))
                            @foreach($errors->get('lib_user_id') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        {!! Form::submit('Issue', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
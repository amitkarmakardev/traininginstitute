@extends('admin.book.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Edit Book Details</h3>
            </div>
            <div class="module-body">

                {!! Form::model($data, ['url' => url('admin', ['book', $data->id]), 'class' => 'form-horizontal row-fluid']) !!}

                @include('admin.book.form')

                <div class="control-group">
                    <div class="controls">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
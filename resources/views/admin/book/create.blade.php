@extends('admin.book.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Create Book</h3>
            </div>
            <div class="module-body">
                {!! Form::open(['url' => url('admin', ['book']), 'class' => 'form-horizontal row-fluid']) !!}

                @include('admin.book.form')

                <div class="control-group">
                    {!! Form::label('no_of_copies', 'No of Copies', ['class' => 'control-label']) !!}
                    <div class="controls">
                        <input type="number" name="no_of_copies" min="1" value="1" class="span4">
                        @if($errors->has('no_of_copies'))
                            @foreach($errors->get('no_of_copies') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
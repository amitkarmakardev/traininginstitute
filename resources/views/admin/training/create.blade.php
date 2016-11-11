@extends('admin.training.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Create Training</h3>
            </div>
            <div class="module-body">
                {!! Form::open(['url' => url('admin', ['training']), 'class' => 'form-horizontal row-fluid']) !!}

                <div class="control-group">
                    {!! Form::label('code', 'Training Code', ['class' => 'control-label']) !!}
                    <div class="controls">
                        {!! Form::text('code', null, ['class' => 'form-control span5']) !!}
                        @if($errors->has('code'))
                            @foreach($errors->get('code') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('name', 'Training Name', ['class' => 'control-label']) !!}
                    <div class="controls">
                        {!! Form::text('name', null, ['class' => 'form-control span9']) !!}
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    <div class="controls">
                        {!! Form::textarea('description', null, ['class' => 'form-control span9', 'rows' => 5]) !!}
                        @if($errors->has('description'))
                            @foreach($errors->get('description') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('scheduled_start_date', 'Scheduled Start Date', ['class' => 'control-label']) !!}
                    <div class="controls">
                        <div class="input-append">
                            {!! Form::text('scheduled_start_date', null, ['class' => 'form-control span10 datepicker']) !!}
                            <span class="add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                        @if($errors->has('scheduled_start_date'))
                            @foreach($errors->get('scheduled_start_date') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('scheduled_end_date', 'Scheduled End Date', ['class' => 'control-label']) !!}
                    <div class="controls">
                        <div class="input-append">
                            {!! Form::text('scheduled_end_date', null, ['class' => 'form-control span10 datepicker']) !!}
                            <span class="add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                        @if($errors->has('scheduled_end_date'))
                            @foreach($errors->get('scheduled_end_date') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('max_seats', 'Maximum Seats', ['class' => 'control-label']) !!}
                    <div class="controls">
                        {!! Form::number('max_seats', 10, ['class' => 'form-control span3']) !!}
                        @if($errors->has('max_seats'))
                            @foreach($errors->get('max_seats') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('authorization_code', 'Authorization Code', ['class' => 'control-label']) !!}
                    <div class="controls">
                        {!! Form::text('authorization_code', null, ['class' => 'form-control span9']) !!}
                        @if($errors->has('authorization_code'))
                            @foreach($errors->get('authorization_code') as $error)
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
@extends('public.registration.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Trainee Registration</h3>
            </div>
            <div class="module-body">

                {!! Form::open(['method' => 'post', 'url' => url('training', ['register']), 'class' => 'form-horizontal row-fluid', 'autocomplete' => 'off']) !!}

                {!! Form::hidden('reg_id', null) !!}
                {!! Form::hidden('training_code', null) !!}

                <div class="control-group">
                    {!! Form::label('training_code', 'Training Code', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('training_code', $code, ['class' => 'form-control', 'readonly' => 'true span9']) !!}
                        @if($errors->has('training_code'))
                            @foreach($errors->get('training_code') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('name', 'Trainee name', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('name', null, ['class' => 'span9']) !!}
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('email', null, ['class' => 'span9']) !!}
                        @if($errors->has('email'))
                            @foreach($errors->get('email') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('address', 'Postal Address', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::textarea('address', null, ['class' => 'span9', 'rows' => 3]) !!}
                        @if($errors->has('address'))
                            @foreach($errors->get('address') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('org_details', 'Organization', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('org_details', null, ['class' => 'span9']) !!}
                        @if($errors->has('org_details'))
                            @foreach($errors->get('org_details') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('authorization_code', 'Authorization Code', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('authorization_code', null, ['class' => 'span5']) !!}
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
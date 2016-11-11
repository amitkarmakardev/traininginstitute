@extends('public.registration.layout')

@section('sub-navigation')

@stop

@section('left')
    <h1>Trainee Registration Form</h1>
    <hr>

    {!! Form::open(['method' => 'post', 'url' => url('training', ['register'])]) !!}
    <div class="form-group">
        {!! Form::label('training_code', 'Training Code') !!}
        @if($errors->has('training_code'))
            @foreach($errors->get('training_code') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('training_code', $code, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Trainee name') !!}
        @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        @if($errors->has('email'))
            @foreach($errors->get('email') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Postal Address') !!}
        @if($errors->has('address'))
            @foreach($errors->get('address') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('org_details', 'Organization') !!}
        @if($errors->has('org_details'))
            @foreach($errors->get('org_details') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('org_details', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('authorization_code', 'Authorization Code') !!}
        @if($errors->has('authorization_code'))
            @foreach($errors->get('authorization_code') as $error)
                <span class="validation-error-text"> - {{ $error }} </span>
            @endforeach
        @endif
        {!! Form::text('authorization_code', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop
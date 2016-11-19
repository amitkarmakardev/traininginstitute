@extends('auth.layout')

@section('left')
    <div class="module">
        <div class="module-head">
            <h3>Librarian / Admin Sign In</h3>
        </div>
        <div class="module-body">
            {!! Form::open(['url' => url('login'), 'autocomplete' => 'off', 'class' => 'form-horizontal row-fluid']) !!}
            <div class="control-group">
                {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
                <div class="controls">
                    <input class="span6" type="text" name="username" value="">
                    @if($errors->has('username'))
                        <span class="help-inline">{{ $errors->first('username')}}</span>
                    @endif
                </div>
            </div>
            <div class="control-group">
                {!! Form::label('username', 'Password', ['class' => 'control-label']) !!}
                <div class="controls">
                    <input class="span6" type="password" name="password">
                    @if($errors->has('password'))
                        <span class="help-inline">{{ $errors->first('password')}}</span>
                    @endif
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox span5">
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

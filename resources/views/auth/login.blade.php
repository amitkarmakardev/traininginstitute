@extends('auth.layout')

@section('left')
    <div class="module">
        <div class="module-head">
            <h3>Librarian / Admin Sign In</h3>
        </div>
        <div class="module-body">
            {!! Form::open(['url' => url('login'), 'autocomplete' => 'off', 'class' => 'row-fluid']) !!}
            <div class="control-group">
                <div class="controls">
                    <input class="span4" type="text" name="username" placeholder="Username" value="">
                    @if($errors->has('username'))
                        <span class="help-inline">{{ $errors->first('username')}}</span>
                    @endif
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input class="span4" type="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <span class="help-inline">{{ $errors->first('password')}}</span>
                    @endif
                </div>
            </div>
            <div class="control-group">
                <div class="controls clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Login</button>
                    <label class="checkbox">
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

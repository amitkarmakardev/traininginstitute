@extends('auth.layout')

@section('left')
    <div class="module module-login span4 offset4">
            <div class="module-head">
                <h3>Librarian / Admin Sign In</h3>
            </div>
        {!! Form::open(['url' => url('login'), 'autocomplete' => 'off']) !!}
            <div class="module-body">
                <div class="control-group">
                    <div class="controls row-fluid">
                        <input class="span12" type="text" name="username" placeholder="Username" value="" autofocus>
                        @if($errors->has('username'))
                            <span class="help-inline">{{ $errors->first('username')}}</span>
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls row-fluid">
                        <input class="span12" type="password" name="password" placeholder="Password">
                        @if($errors->has('password'))
                            <span class="help-inline">{{ $errors->first('password')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="module-foot">
                <div class="control-group">
                    <div class="controls clearfix">
                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                        <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </label>
                    </div>
                </div>
                {{--To create new librarian--}}
                {{--<a href="{{ URL::route('account-create') }}">New librarian? Sign Up</a>--}}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@extends('admin.lib-user.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Create Library User</h3>
            </div>
            <div class="module-body">

                {!! Form::open(['method' => 'post', 'url' => url('admin', ['lib-user']), 'class' => 'form-horizontal row-fluid']) !!}
                {!! Form::hidden('type', 'WBPDCL Employee') !!}
                <div class="control-group">
                    {!! Form::label('user_id', 'User ID', ['class' => 'control-label'] ) !!}
                    <div class="controls">
                        {!! Form::text('user_id', null, ['class' => 'span3']) !!}
                        @if($errors->has('user_id'))
                            @foreach($errors->get('user_id') as $error)
                                <span class="help-inline"> - {{ $error }} </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label'] ) !!}
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
                    <div class="controls">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
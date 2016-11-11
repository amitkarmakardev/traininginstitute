@extends('discussion.layout')

@section('sub-navigation')
    > <a href="{{ url('admin', [$data->code]) }}">{{ $data->name }}</a>
@stop

@section('left')

@stop
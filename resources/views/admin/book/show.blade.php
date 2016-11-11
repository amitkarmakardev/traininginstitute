@extends('admin.book.layout')

@section('sub-navigation')
@stop

@section('left')
    <h1>Book</h1>

    <h2>{{ $data->title }}</h2>
    <h2>{{ $data->isbn }}</h2>
@stop
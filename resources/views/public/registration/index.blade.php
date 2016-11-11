@extends('public.registration.layout')

@section('sub-navigation')

@stop

@section('left')
    <h1>Trainings</h1>
    <hr>

    @foreach($data_list as $data)
        <h2>{{ $data->name }}</h2>
        <h3>{{ $data->description }}</h3>
        <a href="{{ url('training', [$data->code, 'register']) }}" class="btn btn-success">Register</a>
        <hr>
    @endforeach

@stop
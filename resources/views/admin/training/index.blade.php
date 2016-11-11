@extends('admin.training.layout')

@section('left')
    <h1>Trainings</h1>
    <hr>

    @foreach($data_list as $data)
        <h2>{{ $data->name }}</h2>
        <h3>{{ $data->description }}</h3>
        @if($data->actual_start_date == null && $data->actual_end_date == null)
            <a href="{{ url('admin', ['training', $data->code, 'start']) }}" class="btn btn-primary">Start Training</a>
        @elseif($data->actual_start_date != null && $data->actual_end_date == null)
            <a href="{{ url('admin', ['training', $data->code, 'end']) }}" class="btn btn-danger">End Training</a>
        @else
            Training completed on {{ $data->actual_end_date }}
        @endif
        <hr>
    @endforeach

@stop
@extends('public.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>All Trainings</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Training Code</th>
                    <th>Training Name</th>
                    <th>Training Start</th>
                    <th>Training End</th>
                    <th>Seats Available</th>
                    <th>Register</th>
                </tr>
                @foreach($data_list as $data)
                    <tr>
                        <td>{{ $data->code }}</td>
                        <td><a href="{{ url('training', [$data->code]) }}">{{ $data->name }}</a></td>
                        <td>{{ $data->scheduled_start_date }}</td>
                        <td>{{ $data->scheduled_end_date }}</td>
                        <td>{{ $data->availableSeats() .' out of '. $data->max_seats }}</td>
                        <td>
                            @if($data->status() == 'scheduled' && $data->availableSeats() > 1)
                                <a href="{{ url('training', [$data->code, 'register']) }}" class="btn btn-success">Register</a>
                            @else
                                <span class="{{ $data->status() }}">{{ ucwords($data->status()) }}</span>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </table>



@stop
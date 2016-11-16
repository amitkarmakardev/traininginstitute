@extends('public.registration.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Ongoing Trainings</h3>
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
                            <td>{{ intval($data->max_seats) - intval($data->trainees->count()) .' out of '. $data->max_seats }}</td>
                            <td>
                                <a href="{{ url('training', [$data->code, 'register']) }}" class="btn btn-success">Register</a>
                            </td>
                        </tr>
                    @endforeach
                </table>



@stop
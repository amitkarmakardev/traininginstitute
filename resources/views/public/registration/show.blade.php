@extends('public.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Training Details</h3>
            </div>
            <div class="module-body">
                <table class="table table-hover" style="border-bottom: 1px solid #dedede">
                    <tr>
                        <th style="width: 25%">Code</th>
                        <td>{{ $data->code }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $data->description }}</td>
                    </tr>
                    <tr>
                        <th>Scheduled Start Date</th>
                        <td>{{ $data->scheduled_start_date }}</td>
                    </tr>
                    <tr>
                        <th>Scheduled End Date</th>
                        <td>{{ $data->scheduled_end_date }}</td>
                    </tr>
                    <tr>
                        <th>Seats Available</th>
                        <td>{{ intval($data->max_seats) - intval($data->trainees->count()) .' out of '. $data->max_seats }}</td>
                    </tr>
                </table>
                <br>
                <a href="{{ url('training', [$data->code, 'register']) }}" class="btn btn-success">Register for this training</a>
            </div>
        </div>
    </div>
@stop
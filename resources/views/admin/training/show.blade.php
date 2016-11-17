@extends('admin.training.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Training Details</h3>
            </div>
            <div class="module-body">
                <table class="table table-hover">
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
                        <th>Authorization Code</th>
                        <td class="completed">{{ $data->authorization_code }}</td>
                    </tr>
                    <tr>
                        <th>Seats Available</th>
                        <td>{{ $data->availableSeats() .' out of '. $data->max_seats }}</td>
                    </tr>
                    <tr>
                        <th>Actual Start Date</th>
                        <td>{{ $data->actual_start_date }}</td>
                    </tr>
                    <tr>
                        <th>Actual End Date</th>
                        <td>{{ $data->actual_end_date }}</td>
                    </tr>
                </table>
            </div>
            <div class="module-head">
                <h3>Enrolled Trainees</h3>
            </div>
            <div class="module-body">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Organization</th>
                    </tr>
                    @foreach($data->trainees as $trainee)
                        <tr>
                            <td>{{ $trainee->reg_id }}</td>
                            <td>{{ $trainee->name }}</td>
                            <td>{{ $trainee->email }}</td>
                            <td>{{ $trainee->org_details }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
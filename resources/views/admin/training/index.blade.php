@extends('admin.training.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Training List</h3>
            </div>
            <div class="module-body">
                <table class="table table-hover">
                    <tr>
                        <th>Training Code</th>
                        <th>Training Name</th>
                        <th>Training Start</th>
                        <th>Training End</th>
                        <th>Actual Start / End</th>
                    </tr>
                    @foreach($data_list as $data)
                        <tr>
                            <td><a href="{{ url('admin', ['training', $data->code]) }}">{{ $data->code }}</a></td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->scheduled_start_date }}</td>
                            <td>{{ $data->scheduled_end_date }}</td>
                            <td>
                                @if($data->actual_start_date == null && $data->actual_end_date == null)
                                    <a href="{{ url('admin', ['training', $data->code, 'start']) }}"
                                       class="btn btn-success">Start
                                        Training</a>
                                @elseif($data->actual_start_date != null && $data->actual_end_date == null)
                                    <a href="{{ url('admin', ['training', $data->code, 'end']) }}"
                                       class="btn btn-danger">End
                                        Training</a>
                                @else
                                    Training completed on {{ $data->actual_end_date }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
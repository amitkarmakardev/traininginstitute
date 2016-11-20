@extends('public.layout')

@section('left')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>How To Reach</h3>
            </div>
            <div class="module-body">
                <h4>Train</h4>
                <p>The nearest station is Siuri (SURI).</p>
                <table class="table table-striped">
                    <tr>
                        <th>Source</th>
                        <th>Leaves at</th>
                        <th>Destination</th>
                        <th>Arrives at</th>
                        <th>Train Description</th>
                        <th>Schedule</th>
                    </tr>
                    <tr>
                        <td>Howrah (HWH)</td>
                        <td>06:45</td>
                        <td>Siuri (SURI)</td>
                        <td>11:05</td>
                        <td>Hool Expres, Howrah Jn to Siuri, 241 kms</td>
                        <td>Everyday</td>
                    </tr>
                </table>
                <br>
                <h4>Bus</h4>
                <p>
                    BKTPP Simulator is situated inside BKTPP Township, beside Panagarh-Moregram Highway.
                    The nearest bus stop is <strong>Kochujor</strong>.
                </p>
                <table class="table table-striped">
                    <tr>
                        <th>Source</th>
                        <th>Timings</th>
                        <th>Destination</th>
                        <th>Mode</th>
                    </tr>
                    <tr>
                        <td>Esplanade (Kolkata)</td>
                        <td>05:30, 06:30, 07:30, 11:00, <br>12:00, 13:00, 14:00, 16:00, 17:00</td>
                        <td>Kochujor</td>
                        <td>
                            <a href="http://online.sbstcbooking.co.in" target="_blank">Online SBSTC</a>,
                            <br>
                            On Spot Ticket Booking
                        </td>
                    </tr>
                    <tr>
                        <td>Durgapur City Center / Durgapur <br>Railway Station Bus Stop</td>
                        <td>Throughout the day</td>
                        <td>Kochujor</td>
                        <td>On Spot Ticket Booking</td>
                    </tr>
                </table>
                </p>

            </div>
        </div>
    </div>
@stop
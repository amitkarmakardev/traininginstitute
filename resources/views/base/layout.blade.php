@extends('app')

@section('layout')

        <!-- Spinner -->
{{--<div id="spinner">
    <i class="fa fa-spin fa-refresh" style="color: #333; font-size: 5em;"></i>
</div>--}}

<body>
<!-- Header -->
{{--@include('base.header')--}}

<!-- Flash Message -->
@include('base.flash')

<!-- Main Content -->
<div class="wrapper">
    <div class="container">
        <img src="{{ asset('images/simulator.jpg') }}" alt="simulator" class="header-image">
        @yield('content')
        @include('base.footer')
    </div>
</div>

</body>

<!-- jQuery -->
<script src="{{ asset('plugins/edmin/scripts/jquery-1.9.1.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('plugins/edmin/scripts/jquery-ui-1.10.1.custom.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/edmin/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- BootBox -->
<script src="{{ asset('plugins/bootbox.min.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Bootstrap Datepicker -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
{{--<script src="{{ asset('plugins/edmin/scripts/common.js') }}"></script>--}}

        <!-- Datatables -->
<script src="{{ asset('plugins/edmin/scripts/datatables/jquery.dataTables.js') }}"></script>

@stop
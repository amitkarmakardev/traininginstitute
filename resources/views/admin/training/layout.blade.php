@extends('base.layout')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    @include('base.sidebar')
                </div>
                <div class="span9">
                    @yield('left')
                </div>
            </div>
        </div>
    </div>
@stop
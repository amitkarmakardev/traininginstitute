@extends('base.layout')

@section('content')

    <div class="row">
        <div class="span3">
            @include('base.sidebar')
        </div>
        <div class="span9">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3>HTTP Error 403: Unauthorized Access</h3>
                    </div>
                    <div class="module-body">
                        <h5>You don't have enough permission to view this page!!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
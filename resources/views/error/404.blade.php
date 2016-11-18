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
                        <h3>HTTP Error 404: Page not found</h3>
                    </div>
                    <div class="module-body">
                        <h5>The page you are trying to find, is not present in this server!!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
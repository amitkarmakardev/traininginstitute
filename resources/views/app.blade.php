<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/edmin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/edmin/bootstrap/css/bootstrap-responsive.min.css') }}">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="{{ asset('plugins/edmin/images/icons/css/font-awesome.css') }}">--}}

            <!--Admin Panel Theme Edmin-->
    <link rel="stylesheet" href="{{ asset('plugins/edmin/css/theme.css') }}">

    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
          rel='stylesheet'>

    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- app.css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

@yield('layout')

</html>
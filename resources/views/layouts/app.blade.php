<!DOCTYPE html>
<html lang="en">
@php
    if (!isset($footer)) {
        $footer = true;
    }
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icon.png') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('customcss')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        @include('layouts.nav')
        <div class="content-wrapper pb-3" id="contentContainer">
            <div class="content-header">
                @stack('page_header')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
        @stack('customaside')
        @if (isset($footer) && $footer == true)
            @include('layouts.footer')
        @endif
    </div>
    <script src="{{ asset('assets/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    @stack('customjs')
</body>

</html>

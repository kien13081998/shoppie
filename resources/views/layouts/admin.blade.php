<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--icheck-->
    <link href="{{asset('../js/iCheck/skins/minimal/minimal.css')}}" rel="stylesheet">
    <link href="{{asset('../js/iCheck/skins/square/square.css')}}" rel="stylesheet">
    <link href="{{asset('../js/iCheck/skins/square/red.css')}}" rel="stylesheet">
    <link href="{{asset('../js/iCheck/skins/square/blue.css')}}" rel="stylesheet">

    <!--dashboard calendar-->
    <link href="{{asset('../css/clndr.css')}}" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('../js/morris-chart/morris.css')}}">

    <!--common-->
    <link href="{{asset('../css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../css/style-responsive.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/iCheck/jquery.icheck.js')}}"></script>
    <script src="{{ asset('js/modernizr.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

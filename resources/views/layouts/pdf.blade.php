<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <style>

    </style>
</head>

<body>

<div class="wrapper">

    @yield('content')

    <!-- Javascript files -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('js')

</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Work Center</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{URL::asset('plugins/materialize/css/materialize.css')}}" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('plugins/materialize/css/style.css')}}" rel="stylesheet" media="screen,projection">
</head>
<body id="register">
@include('templates.partials.nav')
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br>
    </div>
</div>

<center>
    <div class="container">
       @yield('container')
    </div>
    <center>

        <!--  Scripts-->
        <script src="{{URL::asset('plugins/jquery/jquery-2.1.1.min.js')}}"></script>
        <script src="{{URL::asset('plugins/materialize/js/materialize.js')}}"></script>
        <script src="{{URL::asset('plugins/materialize/js/init.js')}}"></script>
    @yield('js')

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Hackaton')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{  asset('css/main.css') }}">
    <link rel="stylesheet" href="{{  asset('plugins/pikaday/pikaday.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/chosen/css/chosen.css')}}"  media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    @yield('css')
</head>
<body>
@include('templates.partials.nav')
<section>
    <div class="container">
        @yield('content')
    </div>
</section>

<script src="{{asset('plugins/jquery/jquery-2.1.1.min.js')}}"></script>
<script src="{{asset('plugins/angular-1.5.8/angular.js')}}"></script>

@yield('js')
</body>
</html>

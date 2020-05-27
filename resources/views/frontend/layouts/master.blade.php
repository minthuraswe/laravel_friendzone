<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keyword" content="Friend Zone | Cafe & Restaurant">
    <meta name="description" content="“Friend Zone (Cafe & Restaurant) made with love and serve too.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       @yield('title')
    </title>  
    <link rel="shortcut icon" type="image/png"  href="{{asset('images/logo.png')}}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{asset('user/css/mystyle.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/animate.css')}}" rel="stylesheet"> 
    <link href="{{asset('user/css/hover.css')}}" rel="stylesheet"> 
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('user/css/ninja-slider.css')}}" rel="stylesheet" /> --}}
</head>

<body>
    @yield('content')
    @stack('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{-- <script src="{{asset('user/js/ninja-slider.js')}}" type="text/javascript"></script> --}}
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app:name','B-Vote')}}</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('font/font-awesome/scss/fontawesome.scss')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/metismenu.min.js')}}"></script>
        <script src="{{asset('js/waves.min.js')}}"></script>
        <script src="{{asset('js/jquery.3.2.1.js')}}"></script>

    </head>
    <body class="maincontainer">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Car Showroom Management System</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/mega-menu/mega_menu.css')}}" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl-carousel/owl.carousel.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @livewireStyles
    </head>
    <body>
        @livewire('header')

        {{ $slot }}

        @livewire('footer')

        @livewireScripts
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/mega-menu/mega_menu.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/counter/jquery.countTo.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/select/jquery-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    </body>
</html>

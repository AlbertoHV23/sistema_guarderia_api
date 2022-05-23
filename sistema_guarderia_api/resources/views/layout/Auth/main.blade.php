<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="Alberto Hernandez">
    <title>Guaderia | @yield('pagetitle')</title>

    <!-- BOTOOSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}"/>
    @yield('stylespage')

    
</head>

<body>



<!-- /.preloader -->
<div class="page-wrapper">

    {{-- @include('layout.Front.menu') --}}

    @yield('content')

    {{-- @include('layout.Front.footer') --}}



</div>
<!-- /.page-wrapper -->

{{-- 
<script src="{{asset('assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

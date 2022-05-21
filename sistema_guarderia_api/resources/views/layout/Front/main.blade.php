<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Guaderia | @yield('pagetitle')</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"/>

    @yield('stylespage')

    
</head>

<body>

{{-- <div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('front/assets/images/loader.png')}}" alt=""/>
</div> --}}

<!-- /.preloader -->
<div class="page-wrapper">

    @include('layout.Front.menu')

    @yield('content')

    @include('layout.Front.footer')



</div>
<!-- /.page-wrapper -->




</body>

</html>

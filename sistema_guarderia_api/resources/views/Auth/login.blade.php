@extends('layout.Auth.main')
@section('pagetitle', 'Login')

@section('stylespage')
<style>

</style>
@endsection

@section('content')


    <div class="container-fluid login">
        {{-- <h2 align = "center" class="login-title">Iniciar Sesión</h2> --}}

        <form action="{{route('User.test')}}"" method="post"  enctype="multipart/form-data"">
            @csrf
            <div class="imgcontainer">
                <img src="{{asset('assets/img/LOGO.jpg')}}" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="email"><b>Correo electrónico:</b></label>
                <input type="email" class="form-control" id="email" value="" name="email" placeholder="example@mail.com" required>

                <label for="password"><b>Contraseña:</b></label>
                <input type="password" class="form-control" id="password" value="" name="password" placeholder="******* " required>

                <button type="submit">Iniciar Sesión</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Recordarme
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a type="button" class="cancelbtn" href="{{route('home')}}" >Regresar</a>
                <span class="psw">¿No tienes cuenta?  <a href="{{ route('registro.index')}}">Crea Una</a></span>
            </div>
        </form>

    </div>


@endsection

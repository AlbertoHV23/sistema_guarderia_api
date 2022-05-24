@extends('layout.Auth.main')
@section('pagetitle', 'Registro')

@section('stylespage')
@endsection

@section('content')
<div class="container-fluid login">
    {{-- <h2 align = "center" class="login-title">Iniciar Sesión</h2> --}}

    <form action="{{route('Create.Users')}}" method="post"  enctype="multipart/form-data"">
        <div class="imgcontainer">
            <img src="{{asset('assets/img/LOGO.jpg')}}" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="name"><b>Nombre(s):</b></label>
            <input type="text" class="form-control" id="name" value="" name="name" placeholder="" required>

            <label for="email"><b>Correo electrónico:</b></label>
            <input type="text" class="form-control" id="mail" value="" name="email" placeholder="" required>

            <label for="password"><b>Contraseña:</b></label>
            <input type="text" class="form-control" id="password" value="" name="password" placeholder="" required>

            <button type="submit">Registrar</button>
            <label>
                {{-- <input type="checkbox" checked="checked" name="remember"> Recordarme --}}
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a type="button" class="cancelbtn" href="{{route('login.index')}}" >Regresar</a>
            {{-- <span class="psw">¿No tienes cuenta?  <a href="#">Crea Una</a></span> --}}
        </div>
    </form>

</div>


@endsection

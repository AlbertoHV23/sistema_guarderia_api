@extends('layout.System.main')
@section('pagetitle', 'Inicio')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registrar Personal</h1>
    {{-- <a href="" class="d-none d-sm-inline-block btn  btn-primary shadow-sm"><i
            class="fas fa-list fa-sm text-white-50"></i> Ver Registros</a> --}}
</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="" method="post"  enctype="multipart/form-data">
    @csrf
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registrar Personal</h6>
        </div>

        <div class="card-body">

            {{-- @if ($errors->any())

                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">¡Ha ocurrido un ERROR!</h4>
                    <div class="alert-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}

            <div class="row">
                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="name" class="form-label">Nombre(s):</label>
                    <input type="text" class="form-control" id="name" value="" name="name" placeholder="Nombre(s)" required>
                </div>

                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="lastname" class="form-label">Apellido(s):</label>
                    <input type="text" class="form-control" id="lastname" value="" name="lastname" placeholder="Apellidos(s)" required>
                </div>
                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="mail" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="mail" value="" name="mail" placeholder="Email" required>
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="text" class="form-control" id="password" value="" name="password" placeholder="Contraseña" required>
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="curp" class="form-label">CURP:</label>
                    <input type="text" class="form-control" id="curp" value="" name="curp" placeholder="CURP" required>
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="nss" class="form-label">NSS:</label>
                    <input type="text" class="form-control" id="nss" value="" name="nss" placeholder="NSS" required>
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="imagen" value="" accept=".jpeg,.jpg,.png" name="imagen" placeholder="Imagen de la noticia">
                    <small>Tamaño Maximo 1MB, Resolución Maxima: 1920px * 1080px</small>
                </div>

                <div class="mb-3 col-sm- col-mb-6 col-xl-6 ">
                    <label for="rol_id" class="form-label">Rol</label>
                    <select name="rol_id" class="form-control" id="rol_id" required>
                        <option value="">Selecciona...</option>
                  
                    </select>
                </div>
                <br>

        


            </div>


        </div>

            <div class="card-footer" align="right">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>


    </div>
    </form>
</div>
@endsection

@section('scripts-page')
@endsection
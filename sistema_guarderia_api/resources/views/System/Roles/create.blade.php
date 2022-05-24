@extends('layout.System.main')
@section('pagetitle', 'Inicio')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registrar de Roles</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{route('Create.Roles')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Roles</h6>
        </div>

        <div class="card-body">

    
            <div class="row">
                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="role" class="form-label">Rol:</label>
                    <input type="text" class="form-control" id="role" value="" name="role" placeholder="Rol" required>
                </div>

                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="description" class="form-label">Descripción:</label>
                    <input type="text" class="form-control" id="description" value="" name="description" placeholder="Descripción" required>
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
@extends('layout.System.main')
@section('pagetitle', 'Inicio')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registrar de Faltas</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{route('Create.Faltas')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Faltas</h6>
        </div>

        <div class="card-body">

    
            <div class="row">

                <div class="mb-3 col-sm- col-mb-6 col-xl-12 ">
                    <label for="kid_id" class="form-label">Niño</label>
                    <select name="kid_id" class="form-control" id="kid_id" required>
                        <option value="">Selecciona...</option>
                    
                        @foreach ($data as $d)
                            <option class="text-black" value="{{ $d->id }}">{{ $d->name }} {{ $d->lastname }}</option>
                        @endforeach
                    </select>
                
                </div>

                <div class="mb-3 col-sm- col-mb-6 col-xl-6 ">
                    <label for="reason" class="form-label">Motivo</label>
                    <select name="reason" class="form-control" id="reason" >
                        <option value="">Selecciona...</option>
                        <option value="Enfermedad">Enfermedad</option>
                        <option value="Vacaciones">Vacaciones</option>
                        <option value="Accidente">Accidente</option>
                        <option value="Retraso">Retraso</option>
                        <option value="Otro">Otro</option>
                  
                    </select>
                </div>

                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="description" class="form-label">Descripción de la falta:</label>
                    <input type="text" class="form-control" id="description" value="" name="description" placeholder="Descripción" >
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
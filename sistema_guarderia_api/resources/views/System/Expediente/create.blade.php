@extends('layout.System.main')
@section('pagetitle', 'Expediente Medico')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expediente Medico</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{route('Create.Expediente')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Expediente Medico</h6>
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
                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="weight" class="form-label">Peso:</label>
                    <input type="number" class="form-control" id="weight" value="" name="weight" placeholder="Peso" required>
                </div>

                <br>
                
                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="height" class="form-label">Altura:</label>
                    <input type="number" class="form-control" id="height" value="" name="height" placeholder="Altura" required>
                </div>

                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="blood_type" class="form-label">Tipo de Sangre:</label>
                    <input type="text" class="form-control" id="blood_type" value="" name="blood_type" placeholder="Tipo de Sangre" >
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="allergies" class="form-label">Alergias:</label>
                    <input type="text" class="form-control" id="allergies" value="" name="allergies" placeholder="Alergias" >
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="medicines" class="form-label">Medicamentos:</label>
                    <input type="text" class="form-control" id="medicines" value="" name="medicines" placeholder="Medicamentos" >
                </div>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="vaccines" class="form-label">Vacunas:</label>
                    <input type="text" class="form-control" id="vaccines" value="" name="vaccines" placeholder="Vacunas" >
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
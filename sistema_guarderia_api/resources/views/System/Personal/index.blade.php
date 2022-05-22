@extends('layout.System.main')
@section('pagetitle', 'Personal')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Personal</h1>
    <a href=""
       class="d-none d-sm-inline-block btn  btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Registrar</a>
</div>
@endsection

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            @include('flash::message')
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Roles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="data" class="table table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th width="10px">No.</th>
                        <th>Nombre</th>
                        <th width="160px">&nbsp;</th>
                    </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts-page')
@endsection
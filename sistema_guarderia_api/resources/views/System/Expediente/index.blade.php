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
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Expediente Medico</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table id="data" class="table table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th width="10px">No.</th>
                            <th>Niño</th>
                            <th>Peso</th>
                            <th>Altura</th>
                            <th>Tipo de sangre</th>
                            <th>Alergias</th>
                            <th>Medicinas</th>
                            <th>Vacunas</th>
                            <th width="340px">&nbsp;</th>
                        </tr>
                        </thead>
                    </table>

                </div>


            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts-page')
<script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
      $(document).ready(function () {
           $('#data').DataTable({
                "serverSide": true,
                "header": {
                    "token": "{{ csrf_token() }}",
                },
                "ajax": "https://sistema-guarderia.herokuapp.com/api/expediente/all",
                "columns": [
                    {data: 'id'},
                    {data: 'kid_id'},
                    {data: 'weight'},
                    {data: 'height'},
                    {data: 'blood_type'},
                    {data: 'allergies'},
                    {data: 'medicines'},
                    {data: 'vaccines'},
                    {data: 'btn'},
                ],
                "language": {
                    "info": "_TOTAL_ Registro(s)",
                    "search": "Buscar",
                    "paginate": {
                        "next": ">",
                        "previous": "<",
                    },
                    "lengthMenu": 'Mostrar <select >' +
                        '<option value="10">10</option>' +
                        '<option value="30">30</option>' +
                        '<option value="50">50</option>' +
                        '<option value="100">100</option>' +
                        '<option value="-1">Todos</option>' +
                        '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay coincidencias",
                    "infoEmpty": "",
                    "infoFiltered": ""
                }
            });
           console.log("ready to use");

        });
    </script>
</script>
@endsection
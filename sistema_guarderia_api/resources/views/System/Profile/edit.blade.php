@extends('layout.System.main')
@section('pagetitle', 'Perfil Usuario')

@section('stylespage')
@endsection

@section('page-header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Perfil Usuario</h1>

</div>
@endsection

@section('content')
<div class="container-fluid">
    <form action="" method="post"  enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Perfil Usuario</h6>
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
                    <input type="text" class="form-control" id="name" value="{{old('name', $data->name)}}" name="name" placeholder="Nombre(s)" required>
                </div>


                <br>

                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="email" class="form-label">Correo electrónico:</label>
                    <input type="text" class="form-control" id="email" value="{{old('email', $data->email)}}" name="email" placeholder="Correo electrónico" required>
                </div>

                
                <div class="mb-3 col-sm-12 col-mb-6 col-xl-6">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="text" class="form-control" id="password" value="{{old('password', $data->password)}}" name="password" placeholder="Contraseña" required>
                </div>
            
                <br>

                
               
        


            </div>
            <div class="card-footer" align="center">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>


        </div>

            

    </div>
    </form>
</div>
@endsection

@section('scripts-page')
@endsection
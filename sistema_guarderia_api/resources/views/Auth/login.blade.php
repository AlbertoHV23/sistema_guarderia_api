@extends('layout.Auth.main')
@section('pagetitle', 'Login')

@section('stylespage')
@endsection

@section('content')
    <div class="container-fluid login">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <!-- DataTales Example -->
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" align= "center">Iniciar Session</h6>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="mb-3 col-sm-12 col-mb-12 col-xl-12">
                                <label for="mail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="mail" value="" name="mail"
                                    placeholder="example@mail.com" required>
                            </div>
                            <br>

                            <div class="mb-3 col-sm-12 col-mb-12 col-xl-12">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" value="" name="password"
                                    placeholder="********" required>
                            </div>
                            <br>


                            
                            <div class="card-section-btn" >
                              <button type="submit" class="btn btn-primary btn_login">Iniciar Session</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </form>
    
    </div>


@endsection

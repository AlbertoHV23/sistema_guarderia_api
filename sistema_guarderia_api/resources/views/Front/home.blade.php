@extends('layout.Front.main')
@section('pagetitle', 'Inicio')

@section('stylespage')
@endsection

@section('content')

<div class="section-carrusel">
  <div class="container ">
    <div class="row">
      <div class="col-12 text-white">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" align = "center">
              <img src="{{asset('assets/img/C_1.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_2.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_3.jpeg')}}" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_4.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      </div>
    </div>
  </div>
</div>

<div class="section-servicios">
  <h1 class="section-header">Servicios</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4 text-white">
        <div class="servicios-header">
          <i class="fa fa-telegram" aria-hidden="true"></i>
          <h3>Vision</h3>
        </div>
        <div class="servicios-container">
          <p>
            Queremos ayudarte a ser mejores padres y también mejores profesionistas. Y queremos formar niños con sentimientos y valores, que sean autónomos pero sin olvidar a sus padres, que sean autosuficientes pero que sepan trabajar en equipo y que sean capaces de tomar decisiones valorando su entorno.
            </p>
            <b>¡Queremos ser pilar en el crecimiento de tu bebé!</b>
        </div>
      </div>
      <div class="col-4 text-white">
        <div class="servicios-header">
          <i class="fa fa-star" aria-hidden="true"></i>
          <h3>Valores</h3>
        </div>
        <div class="servicios-container">
          <ul>
            <li>Amor</li>
            <li>Honestidad</li>
            <li>Respeto</li>
            <li>Puntualidad</li>
            <li>Compormiso</li>
          </ul>
        </div>
      </div>

      <div class="col-4 text-white">
        <div class="servicios-header">
          <i class="fa fa-heart" aria-hidden="true"></i>
          <h3>Vision</h3>
        </div>
        <div class="servicios-container">
          <p>
            Queremos ayudarte a ser mejores padres y también mejores profesionistas. Y queremos formar niños con sentimientos y valores, que sean autónomos pero sin olvidar a sus padres, que sean autosuficientes pero que sepan trabajar en equipo y que sean capaces de tomar decisiones valorando su entorno.

          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="section-nosotros">
  <h1 class="section-header">¿Quienes Somos?</h1>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-6 text-white">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" align = "center">
              <img src="{{asset('assets/img/C_1.jpeg')}}" class="d-block w-100 image" alt="...">
            </div>
            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_2.jpeg')}}" class="d-block w-100 image" alt="...">
            </div>
            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_3.jpeg')}}" class="d-block w-100 image" alt="...">
            </div>

            <div class="carousel-item" align = "center">
              <img src="{{asset('assets/img/C_4.jpg')}}" class="d-block w-100 image" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-5 text-white padre">
        <div class="section-container hijo">
        <p>Guardería San Nicolas es una Institución de cuidado y crecimiento de niños mientras sus papás trabajan. Fue fundada el 19 de marzo del 2009 en el centro de Monterrey, con la idea de apoyar al los padres que requieren de trabajar para solventar las necesidades económicas de hoy en día. Somos una Centro de Crecimiento comprometido con la calidad y la calidez para que nuestros bebes estén cómodos y en las mejores manos, aparte de contar con el horario mas extendido para tranquilidad de los padres, y queremos ser una guardería reconocida por su calidad y trato. La sucursal de San Nicolás se inauguró el 30 de marzo del 2014 y la sucursal de Hospitaria se inauguró el 26 de marzo del 2018, buscando ofrecer nuestros servicios a más familias.</p>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts-page')
<script>
    const doc = document;
const menuOpen = doc.querySelector(".menu");
const menuClose = doc.querySelector(".close");
const overlay = doc.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  overlay.classList.remove("overlay--active");
});

</script>

@endsection
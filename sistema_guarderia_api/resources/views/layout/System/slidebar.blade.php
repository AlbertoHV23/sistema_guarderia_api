<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand-text mx-3">Sistema Guarderia</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  {{-- <!-- Nav Item - Dashboard -->
  <li class="nav-item">
      <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li> --}}

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading text-white">
      Administración
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseOne"
         aria-expanded="true" aria-controls="collapseOne">
         <i class="fa fa-users" aria-hidden="true"></i>
          <span>Personal</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('personal.create')}}">Agregar</a>
              <a class="collapse-item" href="">Ver Registros</a>
          </div>
      </div>

  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
         aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-key"></i>
          <span>Niños</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="collapseTwo"
           data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Agregar</a>
            <a class="collapse-item" href="">Ver Registros</a>
          </div>
      </div>
  </li>

  
  <!-- Divider -->
  <hr class="sidebar-divider">
   <!-- Heading -->
   <div class="sidebar-heading text-white">
    Reportes
    </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
       aria-expanded="true" aria-controls="collapseTwo">
       <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <span>Expediente Medico</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="collapseThree"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="">Agregar</a>
          <a class="collapse-item" href="">Ver Registros</a>
        </div>
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
         aria-expanded="true" aria-controls="collapseFour">
         <i class="fa fa-user-times" aria-hidden="true"></i>
          <span>Faltas</span>
      </a>
      <div id="collapseFour" class="collapse" aria-labelledby="collapseFour"
           data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Agregar</a>
            <a class="collapse-item" href="">Ver Registros</a>
          </div>
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
           aria-expanded="true" aria-controls="collapseFive">
           <i class="fa fa-bullhorn" aria-hidden="true"></i>
            <span>Quejas</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="collapseFive"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="">Agregar</a>
              <a class="collapse-item" href="">Ver Registros</a>
            </div>
        </div>
      </li>
    </li>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading text-white">
    Roles
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseSix"
       aria-expanded="true" aria-controls="collapseSix">
       <i class="fa fa-tags" aria-hidden="true"></i>
        <span>Roles</span>
    </a>
    <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Agregar</a>
            <a class="collapse-item" href="">Buscar</a>
        </div>
    </div>

</li>

  <hr class="sidebar-divider d-none d-md-block">

  {{-- <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div> --}}

 <hr>
 <hr>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <a href="" class="back-home">Ir a la pagina principal</a>
  </div>


</ul>
<!-- End of Sidebar -->
<!-- End of Sidebar -->

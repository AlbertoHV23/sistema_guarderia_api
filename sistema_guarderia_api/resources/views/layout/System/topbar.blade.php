<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="sucursal">
        @if( auth()->check() )
        <li class="nav-item">
            <h1 class="text-black">{{ auth()->user()->name}}</h1>
        </li>
        @endif
        <h6 class="text-black text-align text-bold">Guardería Infantil San Nicolás</h6>
    </div>
    


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <div class="topbar-divider d-none d-sm-block"></div>
       
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                {{-- <img src="https://scontent.fntr6-1.fna.fbcdn.net/v/t39.30808-6/242500645_4355555301192154_3999385225612146257_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=fF3yQBs0YFgAX9lgyIR&_nc_ht=scontent.fntr6-1.fna&oh=00_AT8B3j9V1INta8mF9m-OSm2CeVAYGt1DRXtOvFv3iRZw2A&oe=628FA6B5"  height="40" width="40" /> --}}
                <i class="fa fa-cog" aria-hidden="true"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Perfil
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ajustes
                </a>
                <div class="dropdown-divider"></div>


                <a class="dropdown-item"  href="{{route('User.logout')}}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cerrar Sessión
                </a>

                <form id="logout-form" action="{{route('User.logout')}}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
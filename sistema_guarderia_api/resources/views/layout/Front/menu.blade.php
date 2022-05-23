<header>
  {{-- <a class="logo" href="/"><img src="images/logo.svg" alt="logo"></a> --}}
  <a class="logo" href="/">Guarderia Infantil San Nicolas</a>
  <nav>
      <ul class="nav__links">
          <li class="header-section"><a href="#">Servicios</a></li>
          <li class="header-section"><a href="#">Nosotros</a></li>
      </ul>
  </nav>
  <a class="cta" href="{{ route('login.index')}}">Iniciar session</a>
  <p class="menu cta">Menu</p>
</header>
<div id="mobile__menu" class="overlay">
  <a class="close">&times;</a>
  <div class="overlay__content">
      <a href="#">Servicios</a>
      <a href="#">Nosotros</a>
      <a href="#">Iniciar Session</a>
  </div>
</div>
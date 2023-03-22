<nav class="navbar navbar-expand-lg bg-transparent fixed-top py-1">
    <div class="container">

      <a class="navbar-brand" href="{{route('home')}}">
        <img width="150px" src="{{asset('img/the-one-logo-white.webp')}}" alt="The One Residences Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header">
          <div class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</div>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li class="nav-item">
              <a class="nav-link me-5 active" href="{{route('home')}}">{{__('Inicio')}}</a>
            </li>

            <li class="nav-item">
              <a class="nav-link me-5" href="#">{{__('Condominios')}}</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link me-5" href="#">{{__('Nosotros')}}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link me-5 me-lg-0" href="#">{{__('Contacto')}}</a>
            </li>

          </ul>
        </div>

      </div>
    </div>
</nav>
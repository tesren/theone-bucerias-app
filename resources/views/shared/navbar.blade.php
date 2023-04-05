<nav class="navbar navbar-dark navbar-expand-lg bg-transparent fixed-top py-1" id="the-one-navbar" data-bs-theme="dark">
    <div class="container">

      <a class="navbar-brand" href="{{route('home')}}">
        <img width="150px" src="{{asset('img/the-one-logo-white.webp')}}" alt="The One Residences Logo">
      </a>

      <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header">
          <div class="offcanvas-title" id="offcanvasNavbarLabel">
            <img width="200px" src="{{asset('img/the-one-logo-white.webp')}}" alt="The One Residences Logo" loading="lazy">
          </div>

          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 me-0 me-lg-5">

            @php
              $route = Route::currentRouteName();
            @endphp

            <li class="nav-item">
              <a class="nav-link mx-0 mx-lg-5 @if($route == 'es.home' or $route == 'en.home') active @endif" href="{{route('home')}}">
                {{__('Inicio')}}
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link me-5 @if($route == 'es.inventory' or $route == 'en.inventory') active @endif" href="{{route('inventory')}}">
                {{__('Condominios')}}
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link me-5 @if($route == 'es.construction' or $route == 'en.construction') active @endif" href="{{route('construction')}}">
                {{__('Avances de Obra')}}
              </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link me-5" href="#">
                  {{__('Nosotros')}}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link me-5 @if($route == 'es.contact' or $route == 'en.contact') active @endif" href="{{route('contact')}}">
                  {{__('Contacto')}}
                </a>
            </li>

            <li class="nav-item me-5 align-self-start align-self-lg-center mt-3 mt-lg-0">

              @if (app()->getLocale() == 'es')

                @if($route == 'es.unit')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('unit', ['id'=>$unit->id, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'en');}}">{{__('EN')}}</a>
                @elseif($route == 'es.search')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('search', request()->query(), true, 'en'); }}">{{__('EN')}}</a>
                @else
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route($route, request()->query(), true, 'en');}}">{{__('EN')}}</a>
                @endif

              @else

                @if($route == 'en.unit')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('unit', ['id'=>$unit->id, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'es');}}">{{__('ES')}}</a>
                @elseif($route == 'en.search')
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route('search', request()->query(), true, 'es'); }}">{{__('ES')}}</a>
                @else
                  <a class="link-dark text-decoration-none rounded-circle bg-light p-2" href="{{$url = route($route, request()->query(), true, 'es');}}">{{__('ES')}}</a>
                @endif

              @endif

            </li>

          </ul>

          <div class="align-self-center mt-5 mt-lg-0">
            <a href="https://www.facebook.com/TheOneResidencesBucerias" class="link-light text-decoration-none me-2" target="_blank" rel="noopener noreferrer" aria-label="The One Residences Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            
            <a href="https://www.instagram.com/theoneresidencesbucerias/" class="link-light text-decoration-none me-2" target="_blank" rel="noopener noreferrer" aria-label="The One Residences Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="#" class="link-light text-decoration-none" target="_blank" rel="noopener noreferrer" aria-label="The One Residences Whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            
          </div>

        </div>

      </div>
    </div>
</nav>
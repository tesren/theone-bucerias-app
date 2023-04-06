@extends('shared.base')

@section('titles')
    <title>The One Residences - {{__('Condominios en Bucerías Nayarit con vista al mar')}}</title>
    <meta name="description" content="{{__('The One Residences es un desarrollo inmobiliario en Bucerías Nayarit con condominios en preventa ubicados a solo 2 minutos caminando de la playa. Descubre tu hogar en el paraíso con nuestras residencias de lujo diseñadas con la más alta calidad y comodidad. Conoce nuestras opciones de departamentos en venta y aprovecha la oportunidad de vivir en uno de los lugares más exclusivos de la Riviera Nayarit')}}">
@endsection

@section('content')

  <div class="position-relative">

    <div class="row justify-content-evenly position-absolute h-100 top-0 start-0 z-3">

      <div class="col-12 col-lg-5 align-self-end h-70 border-start border-2 px-3 px-lg-4">
        <div class="ff-oswald text-white mb-5 fs-5">THE ONE RESIDENCES</div>
        <h1 class="fs-0 text-white mb-5">{{__('Condominios en el corazón de Bucerías, Nayarit.')}}</h1>
        <a href="{{route('inventory')}}" class="link-light text-decoration-none fs-4">{{__('Ver Inventario')}} <i class="fa-solid fa-right-long"></i></a>
      </div>

      <div class="col-12 col-lg-3"></div>

    </div>

    <div class="fondo-oscuro z-2"></div>

    <div id="carouselExample" class="carousel slide carousel-fade position-relative z-1"  data-bs-ride="carousel">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="{{asset('/img/the-one-residences.webp')}}" class="d-block w-100" alt="The One Residences - Fachada" style="height:100vh; object-fit:cover;">
        </div>

        <div class="carousel-item">
          <img src="{{asset('/img/the-one-residences-back.webp')}}" class="d-block w-100" alt="The One Residences - Fachada trasera" loading="lazy" style="height:100vh; object-fit:cover;">
        </div>

        <div class="carousel-item">
          <img src="{{asset('/img/the-one-pool.webp')}}" class="d-block w-100" alt="The One Residences - Terraza" loading="lazy" style="height:100vh; object-fit:cover;">
        </div>

      </div>

    </div>

    <a href="{{route('contact')}}" class="btn btn-orange position-absolute text-uppercase end-0 top-50 z-3 fs-4 d-none d-lg-block" style="transform: rotate(90deg);  transform-origin: right; margin-right:25px;">
      {{__('Contacto')}}
    </a>

  </div>

  {{-- Primer parrafo --}}
  <div class="row justify-content-evenly my-6">

    <div class="col-12 col-lg-4 align-self-center mb-5 mb-lg-0">

      <div class="text-orange ff-oswald d-flex mb-4">
        <hr>
        <div class="align-self-center fw-bold text-uppercase">{{__('El Proyecto')}}</div>
      </div>

      <h2 class="mb-5 fs-1">{{__('Descubre el paraíso en la costa de Nayarit')}}</h2>
      <p class="fs-6 mb-5 fw-light">
        {{__('La ubicación de The One en Bucerías, conjuga las riquezas más grandes de este exclusivo destino, su playa y el interior del pueblo. Por ello, ofrece la mejor ubicación en la Zona Dorada, donde se puede escuchar el sonido de las olas del mar y oler la esencia del agua salada, donde se podrá disfrutar de las espectaculares puestas del sol, practicar deportes de mar y disfrutar de la vida trendy que ofrece esta zona. Ubicado en el corazón de Bucerías en la Calle Lázaro #43 Cárdenas entre la calles Morelos y Galeana, a sólo 1 cuadra de la playa. The One reúne una visión de amenidades de estilo de vida de lujo dentro de un entorno boutique sin igual en el área.')}}
      </p>
      
      <a href="{{route('inventory')}}" class="btn btn-orange fs-5 text-uppercase">
        {{__('Ver Inventario')}} <i class="fa-solid fa-right-long"></i>
      </a>

    </div>

    <div class="col-12 col-lg-4">
      <img src="{{asset('/img/dinning-area.webp')}}" alt="Dinning area - The One Residences" class="w-100" loading="lazy">
    </div>

  </div>

  {{-- Lugares cerca --}}
  <div class="row justify-content-evenly position-relative mb-6 pt-5" style="background-image: url('{{asset('/img/kitchen-terrace.webp')}}'); background-repeat: no-repeat;background-size:cover; background-position:center;">

    <div class="fondo-oscuro"></div>

    <div class="col-12 col-lg-4 z-3">
      <h2 class="text-white fs-1">{{__('Para aquellos que saben')}} <span class="text-orange">{{__('escoger')}}</span></h2>
      <p class="text-white fw-light">{{__('Bucerías es un lugar hermoso y acogedor para vivir, con playas impresionantes, un ambiente tranquilo, una ubicación estratégica, una comunidad internacional, un buen clima y un costo de vida asequible. ¡Definitivamente vale la pena considerarlo como una opción!')}}</p>
    </div>

    <div class="col-12 col-lg-5 z-3 px-3 px-lg-0 mb-5">

      <div class="text-white fw-bold">{{__('Playa Bucerías')}}</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia a la Playa" aria-valuenow="45" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 10%">45m</div>
      </div>

      <div class="text-white fw-bold">{{__('Bucerías Centro')}}</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia al Centro" aria-valuenow="500" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 31.25%">500m</div>
      </div>

      <div class="text-white fw-bold">{{__('Hospital CMQ')}}</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia al hospital" aria-valuenow="750" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 46.875%">750m</div>
      </div>

      <div class="text-white fw-bold">{{__('Supermercado')}}</div>
      <div class="progress rounded-0" role="progressbar" aria-label="Distancia al supermercado" aria-valuenow="1600" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 95%">1.6km</div>
      </div>
      

    </div>

    <div class="col-12 px-0 z-3">
      <div class="row">
        <div class="col-12 col-lg-11 bg-white border-top border-dark border-3 py-5">

          <div class="row px-2 px-lg-5">

            <div class="col-12 col-lg-3 mb-3">
              <div class="fs-0 text-orange">02</div>
              <div class="fw-bold text-uppercase mb-2">{{__('minutos caminando a')}}</div>
              <div class="fw-bold ff-oswald">{{__('Playa Bucerías')}}</div>
            </div>

            <div class="col-12 col-lg-3 mb-3">
              <div class="fs-0 text-orange">07</div>
              <div class="fw-bold text-uppercase mb-2">{{__('minutos caminando a')}}</div>
              <div class="fw-bold ff-oswald">{{__('Bucerías Centro')}}</div>
            </div>

            <div class="col-12 col-lg-3 mb-3">
              <div class="fs-0 text-orange">04</div>
              <div class="fw-bold text-uppercase mb-2">{{__('minutos en auto a')}}</div>
              <div class="fw-bold ff-oswald">{{__('Hospital CMQ')}}</div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="fs-0 text-orange">06</div>
              <div class="fw-bold text-uppercase mb-2">{{__('minutos en auto al')}}</div>
              <div class="fw-bold ff-oswald">{{__('Supermercado')}}</div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

  {{-- Tipos de departamentos --}}
  <div class="row justify-content-center mb-6">

    <div class="col-12 col-lg-9">

      <div class="d-flex justify-content-center justify-content-lg-between mb-5">
        <h3 class="fs-1 text-center text-lg-start">{{__('Tipos de')}} <span class="text-orange">{{__('Condominios')}}</span></h3>
        <a href="{{route('inventory')}}" class="btn btn-orange align-self-center d-none d-lg-block">{{__('Descubre más')}} <i class="fa-solid fa-right-long"></i></a>
      </div>

      <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            {{__('Estudio')}}
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            01 {{__('Recámara')}}
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link active w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            02 {{__('Recámaras')}}
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">
            03 {{__('Recámaras')}}
          </button>
        </li>

      </ul>

      <div class="tab-content" id="pills-tabContent">

        {{-- Estudios --}}
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

          <div class="row px-0">

            @foreach ($studios as $unit)
              <div class="col-12 col-lg-4 mb-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = '/media/'.$unit->blueprint_path;
                  @endphp

                  <img src="@isset($blueprint){{ asset($blueprint) }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}" style="height: 300px; object-fit:cover;" loading="lazy">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{__('Estudio')}} - {{$unit->bathrooms}}BA - {{$unit->area}}m²</div>

                    @if (app()->getLocale() == 'en')
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_en}}</div>
                    @else
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    @endif

                    <a href="{{route('unit', ['id'=> $unit->id])}}" class="btn btn-orange w-100">{{__('Más Info')}}</a>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
          
        </div>

        {{-- 1 Recámara --}}
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="row px-0">

            @foreach ($one_bedrooms as $unit)
              <div class="col-12 col-lg-4 mb-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = '/media/'.$unit->blueprint_path;
                  @endphp

                  <img src="@isset($blueprint){{ asset($blueprint) }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}" style="height: 300px; object-fit:cover;" loading="lazy">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> {{__('REC')}}</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>
                    @if (app()->getLocale() == 'en')
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_en}}</div>
                    @else
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    @endif                    
                    <a href="{{route('unit', ['id'=> $unit->id])}}" class="btn btn-orange w-100">{{__('Más Info')}}</a>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

        {{-- 2 Recámaras --}}
        <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="row px-0">

            @foreach ($two_bedrooms as $unit)
              <div class="col-12 col-lg-4 mb-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = '/media/'.$unit->blueprint_path;
                  @endphp

                  <img src="@isset($blueprint){{ asset($blueprint) }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}" style="height: 300px; object-fit:cover;" loading="lazy">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> {{__('REC')}}</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>
                    @if (app()->getLocale() == 'en')
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_en}}</div>
                    @else
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    @endif                    
                    <a href="{{route('unit', ['id'=> $unit->id])}}" class="btn btn-orange w-100">{{__('Más Info')}}</a>
                  </div>

                </div>
              </div>
            @endforeach

          </div>
        </div>

        {{-- 3 Recámaras --}}
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
          <div class="row px-0">

            @foreach ($three_bedrooms as $unit)
              <div class="col-12 col-lg-4 mb-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = '/media/'.$unit->blueprint_path;
                  @endphp

                  <img src="@isset($blueprint){{ asset($blueprint) }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}" style="height: 300px; object-fit:cover;" loading="lazy">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> {{__('REC')}}</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>

                    @if (app()->getLocale() == 'en')
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_en}}</div>
                    @else
                      <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    @endif

                    <a href="{{route('unit', ['id'=> $unit->id])}}" class="btn btn-orange w-100">{{__('Más Info')}}</a>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

      </div>

    </div>

  </div>

  {{--Amenidades--}}
  <div class="row justify-content-center mb-6">

    <div class="col-12 col-lg-9">
      <h4 class="fs-1 text-center text-lg-start">{{__('Amenidades')}}</h4>

      <div class="row">

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-water-ladder position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-3">{{__('Alberca')}}</div>
            <p>{{__('Alberca Infinita de 3x17 metros ubicada en la terraza del edificio')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-dumbbell position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-3">{{__('Gimnasio')}}</div>
            <p>{{__('Equipado para mantenerte en forma todo el año')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-book position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-4">{{__('Zona de Lectura')}}</div>
            <p>{{__('Relájate y desconéctate en la zona de lectura')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-elevator position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-3">{{__('Elevador')}}</div>
            <p>{{__('1 Elevador para mayor comodidad de los residentes')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-burger position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-3">{{__('Área BBQ')}}</div>
            <p>{{__('Nada mejor que una buena BBQ para alegrar el día')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-shop position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-3">{{__('Área Comercial')}}</div>
            <p>{{__('Área comercial en planta baja del Edificio')}}</p>
          </div>
        </div>
        
        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-water position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-4">{{__('Tina de Hidromasaje')}}</div>
            <p>{{__('Alivia el estrés en la tina de hidromasaje')}}</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-utensils position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5 text-uppercase">{{__('Amenidades')}}</div>
            <div class="fs-4">{{__('Área de Comedor')}}</div>
            <p>{{__('Disfruta de buena comida y charla en el comedor')}}</p>
          </div>
        </div>

      </div>

    </div>

  </div>
  
  {{-- Ubicación --}}
  <div class="row justify-content-center mb-6">
    <div class="col-11 col-lg-9 bg-light p-3 p-lg-5">

      <div class="row justify-content-between mb-4 mb-lg-5">
        <h5 class="fs-1 col-12 col-lg-9 text-center text-lg-start">{{__('Todo al')}} <span class="text-orange">{{__('alcance')}}</span></h5>
        <a href="{{route('inventory')}}" class="btn btn-orange fs-5 align-self-center col-12 col-lg-3 d-none d-lg-block">{{__('Ver Inventario')}} <i class="fa-solid fa-right-long"></i></a>
      </div>
      

      <div class="row">

        <div class="col-12 col-lg-8 mb-3 mb-lg-0">
          
          <div id="carouselLocation" class="carousel slide">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/vista-ubicación-min.webp')}}" class="d-block w-100" alt="Ubicación The One Residences Bucerías" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/vista-edificio-min.webp')}}" class="d-block w-100" alt="Ubicación The One Residences Bucerías" loading="lazy">
              </div>
              <div class="carousel-item">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.923456434327!2d-105.33918008478108!3d20.753896302479934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84214171485563f7%3A0x312112c4aabbcff4!2sThe%20One%20Residences!5e0!3m2!1ses-419!2smx!4v1680112283882!5m2!1ses-419!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLocation" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselLocation" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>

        <div class="col-12 col-lg-4">
          <ul class="list-group list-group-flush mb-4 mb-lg-0">

            <li class="list-group-item bg-transparent">
              <a class="link-dark text-decoration-none fw-bold ff-oswald fs-5 d-flex" data-bs-toggle="collapse" href="#collapsePlaya" role="button" aria-expanded="false" aria-controls="collapsePlaya">
                <i class="fa-solid fa-umbrella-beach me-1 align-self-center"></i> {{__('Playa Bucerías')}} <i class="ms-auto fa-solid fa-chevron-down"></i>
              </a>
              <div class="collapse" id="collapsePlaya">
                <p class="p-2">
                  {{__('Es una playa amplia y tranquila con aguas cristalinas y arena suave, ideal para relajarse y disfrutar del sol. Además, ofrece una amplia variedad de actividades acuáticas, como nadar, bucear y hacer surf.')}}
                </p>
              </div>
            </li>

            <li class="list-group-item bg-transparent">
              <a class="link-dark text-decoration-none fw-bold ff-oswald fs-5 d-flex" data-bs-toggle="collapse" href="#collapseCentro" role="button" aria-expanded="false" aria-controls="collapseCentro">
                <i class="fa-solid fa-map-location-dot me-1 align-self-center"></i> {{__('Bucerías Centro')}} <i class="ms-auto fa-solid fa-chevron-down"></i>
              </a>
              <div class="collapse" id="collapseCentro">
                <p class="p-2">
                  {{__('La zona del centro se encuentra a pocos minutos de la playa y está repleta de tiendas, restaurantes, bares y galerías de arte locales. Es un lugar ideal para caminar y explorar la cultura y la vida cotidiana de la zona.')}}
                </p>
              </div>
            </li>

            <li class="list-group-item bg-transparent">
              <a class="link-dark text-decoration-none fw-bold ff-oswald fs-5 d-flex" data-bs-toggle="collapse" href="#collapseHospital" role="button" aria-expanded="false" aria-controls="collapseHospital">
                <i class="fa-solid fa-hospital me-1 align-self-center"></i> {{__('Hospital')}} <i class="ms-auto fa-solid fa-chevron-down"></i>
              </a>
              <div class="collapse" id="collapseHospital">
                <p class="p-2">
                  {{__('El Hospital CQM se encuentra a solo 4 minutos en auto lo cual puede ser esencial para garantizar una atención médica rápida en caso de emergencia, así como para brindar mayor tranquilidad y acceso a servicios médicos especializados.')}}
                </p>
              </div>
            </li>

            <li class="list-group-item bg-transparent">
              <a class="link-dark text-decoration-none fw-bold ff-oswald fs-5 d-flex" data-bs-toggle="collapse" href="#collapseMarket" role="button" aria-expanded="false" aria-controls="collapseMarket">
                <i class="fa-solid fa-store me-1 align-self-center"></i> {{__('Supermercado')}} <i class="ms-auto fa-solid fa-chevron-down"></i>
              </a>
              <div class="collapse" id="collapseMarket">
                <p class="p-2">
                  {{__('El Supermercado está solo 7 minutos en auto, lo cual brinda comodidad, ahorro de tiempo y dinero, mayor variedad de productos y mayor disponibilidad de productos frescos y de temporada.')}}
                </p>
              </div>
            </li>

          </ul>

          <a href="{{route('inventory')}}" class="btn btn-orange fs-5 align-self-center w-100 d-block d-lg-none">{{__('Ver Inventario')}} <i class="fa-solid fa-right-long"></i></a>

        </div>

      </div>

    </div>
  </div>

  {{-- Galería --}}
  <section class="splide" aria-label="Galería The One Residences" id="gallery-home">

    <div class="splide__track">

      <ul class="splide__list">
        <li class="splide__slide">
          <img src="{{'/img/the-one-pool.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/kitchen-terrace.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/bedroom.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/kitchen.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/roof-garden.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/rooftop.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;" loading="lazy">
        </li>
      </ul>

    </div>

  </section>

@endsection

@section('javascript')
  <script src="{{asset('/js/splide.min.js')}}" defer></script>
@endsection
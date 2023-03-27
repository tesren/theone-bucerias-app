@extends('shared.base')

@section('titles')
    <title>The One Residences - Condominios en Bucerías Nayarit con vista al mar</title>
    <meta name="description" content="">
@endsection

@section('content')

  <div class="position-relative">

    <div class="row justify-content-evenly position-absolute h-100 top-0 start-0 z-3">

      <div class="col-12 col-lg-5 align-self-end h-70 border-start border-2 px-3 px-lg-4">
        <div class="ff-oswald text-white mb-5 fs-5">THE ONE RESIDENCES</div>
        <h1 class="fs-0 text-white mb-5">{{__('Condominios en el corazón de Bucerías, Nayarit.')}}</h1>
        <a href="#" class="link-light text-decoration-none fs-4">Ver Inventario <i class="fa-solid fa-right-long"></i></a>
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

    <a href="#" class="btn btn-orange position-absolute end-0 top-50 z-3 fs-4 d-none d-lg-block" style="transform: rotate(90deg);  transform-origin: right; margin-right:25px;">
      CONTACT
    </a>

  </div>

  {{-- Primer parrafo --}}
  <div class="row justify-content-evenly my-6">

    <div class="col-12 col-lg-4 align-self-center mb-5 mb-lg-0">

      <div class="text-orange ff-oswald d-flex mb-4">
        <hr>
        <div class="align-self-center fw-bold text-uppercase">El Proyecto</div>
      </div>

      <h2 class="mb-5 fs-1">Descubre el paraíso en la costa de Nayarit</h2>
      <p class="fs-5 mb-5 fw-light">Dinámico y conectado, con un toque de tranquilidad. El paisaje es maravilloso y relajante, con paseos cuidados y jardines tropicales. La belleza y la serenidad están a su lado al llegar a casa.</p>
      
      <a href="#" class="btn btn-orange fs-5 text-uppercase">
        Ver Inventario <i class="fa-solid fa-right-long"></i>
      </a>

    </div>

    <div class="col-12 col-lg-4">
      <img src="{{asset('/img/dinning-area.webp')}}" alt="Dinning area - The One Residences" class="w-100">
    </div>

  </div>

  {{-- Lugares cerca --}}
  <div class="row justify-content-evenly position-relative mb-6 pt-5" style="background-image: url('{{asset('/img/kitchen-terrace.webp')}}'); background-repeat: no-repeat;background-size:cover; background-position:center;">

    <div class="fondo-oscuro"></div>

    <div class="col-12 col-lg-4 z-3">
      <h2 class="text-white fs-1">Para aquellos que saben <span class="text-orange">escoger</span></h2>
      <p class="text-white fw-light">Bucerías es un lugar hermoso y acogedor para vivir, con playas impresionantes, un ambiente tranquilo, una ubicación estratégica, una comunidad internacional, un buen clima y un costo de vida asequible. ¡Definitivamente vale la pena considerarlo como una opción!</p>
    </div>

    <div class="col-12 col-lg-5 z-3 px-3 px-lg-0 mb-5">

      <div class="text-white fw-bold">Playa Bucerías</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia a la Playa" aria-valuenow="160" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 10%">130m</div>
      </div>

      <div class="text-white fw-bold">Bucerías Centro</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia al Centro" aria-valuenow="500" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 31.25%">500m</div>
      </div>

      <div class="text-white fw-bold">Hospital CMQ</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia al hospital" aria-valuenow="750" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 46.875%">750m</div>
      </div>

      <div class="text-white fw-bold">Supermercado</div>
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
              <div class="fw-bold text-uppercase mb-2">minutos caminando a</div>
              <div class="fw-bold ff-oswald">Playa Bucerías</div>
            </div>

            <div class="col-12 col-lg-3 mb-3">
              <div class="fs-0 text-orange">07</div>
              <div class="fw-bold text-uppercase mb-2">minutos caminando a</div>
              <div class="fw-bold ff-oswald">Bucerías Centro</div>
            </div>

            <div class="col-12 col-lg-3 mb-3">
              <div class="fs-0 text-orange">04</div>
              <div class="fw-bold text-uppercase mb-2">minutos en auto a</div>
              <div class="fw-bold ff-oswald">Hospital CMQ</div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="fs-0 text-orange">06</div>
              <div class="fw-bold text-uppercase mb-2">minutos en auto al</div>
              <div class="fw-bold ff-oswald">Supermercado</div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

  {{-- Tipos de departamentos --}}
  <div class="row justify-content-center mb-6">

    <div class="col-12 col-lg-9">

      <div class="d-flex justify-content-between mb-5">
        <h3 class="fs-1">Tipos de Condominios</h3>
        <a href="#" class="btn btn-orange align-self-center">Descubre más <i class="fa-solid fa-right-long"></i></a>
      </div>

      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link active w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            Estudio
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            01 Recámara
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            02 Recámaras
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">
            03 Recámaras
          </button>
        </li>

      </ul>

      <div class="tab-content" id="pills-tabContent">

        {{-- Estudios --}}
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

          <div class="row px-0">

            @foreach ($studios as $unit)
              <div class="col-12 col-lg-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = $unit->getFirstMedia('blueprint');
                  @endphp

                  <img src="@isset($blueprint){{ $blueprint->getUrl('medium') }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">Estudio - {{$unit->bathrooms}}BA - {{$unit->area}}m²</div>
                    <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    <a href="#" class="btn btn-orange w-100">Más Info</a>
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
              <div class="col-12 col-lg-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = $unit->getFirstMedia('blueprint');
                  @endphp

                  <img src="@isset($blueprint){{ $blueprint->getUrl('medium') }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> REC</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>
                    <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    <a href="#" class="btn btn-orange w-100">Más Info</a>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

        {{-- 2 Recámaras --}}
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="row px-0">

            @foreach ($two_bedrooms as $unit)
              <div class="col-12 col-lg-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = $unit->getFirstMedia('blueprint');
                  @endphp

                  <img src="@isset($blueprint){{ $blueprint->getUrl('medium') }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> REC</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>
                    <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    <a href="#" class="btn btn-orange w-100">Más Info</a>
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
              <div class="col-12 col-lg-4">
                <div class="card w-100 border-0 position-relative">

                  @php
                    $blueprint = $unit->getFirstMedia('blueprint');
                  @endphp

                  <img src="@isset($blueprint){{ $blueprint->getUrl('medium') }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}">

                  <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>

                  <div class="card-body">
                    <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                    <div class="fs-3">{{$unit->bedrooms}}<span class="fs-6"> REC</span> - {{$unit->bathrooms}}<span class="fs-6"> BA</span> - {{$unit->area}}m²</div>
                    <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                    <a href="#" class="btn btn-orange w-100">Más Info</a>
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
      <h4 class="fs-1 text-center text-lg-start">Amenidades</h4>

      <div class="row">

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-water-ladder position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5">AMENIDADES</div>
            <div class="fs-3">Alberca</div>
            <p>Alberca Infinita ubicada en la terraza del edificio</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-dumbbell position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5">AMENIDADES</div>
            <div class="fs-3">Gimnasio</div>
            <p>Equipado para mantenerte en forma</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-book position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5">AMENIDADES</div>
            <div class="fs-4">Zona de Lectura</div>
            <p>Relájate y desconéctate en la zona de lectura</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-elevator position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5">AMENIDADES</div>
            <div class="fs-3">Elevador</div>
            <p>1 Elevador para mayor comodidad de los residentes</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-burger position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5">AMENIDADES</div>
            <div class="fs-3">Área BBQ</div>
            <p>Nada mejor que una buena BBQ para alegrar el día</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-shop position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5">AMENIDADES</div>
            <div class="fs-3">Área Comercial</div>
            <p>Área comercial en planta baja del Edificio</p>
          </div>
        </div>
        
        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-orange position-relative text-white" style="min-height: 225px;">
            <i class="fa-solid fa-water position-absolute top-0 end-0 fa-2x me-4 mt-4"></i>
            <div class="ff-oswald pt-5">AMENIDADES</div>
            <div class="fs-4">Tina de Hidromasaje</div>
            <p>Alivia el estrés en la tina de hidromasaje</p>
          </div>
        </div>

        <div class="col-12 col-lg-3 p-2">
          <div class="p-3 p-lg-4 bg-light position-relative" style="min-height: 225px;">
            <i class="fa-solid fa-utensils position-absolute top-0 end-0 fa-2x text-orange me-4 mt-4"></i>
            <div class="ff-oswald text-orange pt-5">AMENIDADES</div>
            <div class="fs-4">Área de Comedor</div>
            <p>Disfruta de buena comida y charla en el comedor</p>
          </div>
        </div>

      </div>

    </div>

  </div>
  

  {{-- Galería --}}
  <section class="splide" aria-label="Galería The One Residences" id="gallery-home">

    <div class="splide__track">

      <ul class="splide__list">
        <li class="splide__slide">
          <img src="{{'/img/the-one-pool.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/kitchen-terrace.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/bedroom.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/kitchen.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/roof-garden.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
        <li class="splide__slide">
          <img src="{{'/img/rooftop.webp'}}" alt="The One Residences - Terraza" class="w-100" style="height:200px; object-fit:cover;">
        </li>
      </ul>

    </div>

  </section>

  <div class="p-5 row justify-content-evenly bg-orange">
    <h6 class="fs-1 col-12 col-lg-4">Contacta un agente</h6>
    <a href="#" class="btn btn-dark fs-5 text-uppercase align-self-center rounded-0 col-12 col-lg-2">
      Ver Inventario <i class="fa-solid fa-right-long"></i>
    </a>
  </div>

@endsection
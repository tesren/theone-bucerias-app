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

    <div class="col-12 col-lg-4 align-self-center">

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

    <div class="col-12 col-lg-5 z-3 px-0 mb-5">

      <div class="text-white fw-bold">Playa Bucerías</div>
      <div class="progress rounded-0 mb-4" role="progressbar" aria-label="Distancia a la Playa" aria-valuenow="130" aria-valuemin="0" aria-valuemax="1600">
        <div class="progress-bar bg-orange" style="width: 8.125%">130m</div>
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
        <div class="progress-bar bg-orange" style="width: 100%">1.6km</div>
      </div>
      

    </div>

    <div class="col-12 px-0 z-3">
      <div class="row">
        <div class="col-12 col-lg-11 bg-white border-top border-dark border-3 py-5">

          <div class="row px-2 px-lg-5">

            <div class="col-12 col-lg-3">
              <div class="fs-0 text-orange">02</div>
              <div class="fw-bold text-uppercase mb-2">minutos caminando a</div>
              <div class="fw-bold ff-oswald">Playa Bucerías</div>
            </div>

            <div class="col-12 col-lg-3">
              <div class="fs-0 text-orange">07</div>
              <div class="fw-bold text-uppercase mb-2">minutos caminando a</div>
              <div class="fw-bold ff-oswald">Bucerías Centro</div>
            </div>

            <div class="col-12 col-lg-3">
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


@endsection
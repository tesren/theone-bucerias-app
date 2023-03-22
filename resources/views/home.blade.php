@extends('shared.base')

@section('titles')
    <title>The One Residences - Condominios en Bucerías Nayarit con vista al mar</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="position-relative">

        <div class="row justify-content-evenly position-absolute h-100 top-0 start-0 z-3">

            <div class="col-12 col-lg-5 align-self-center">
                <h1 class="fs-0 text-white">{{__('Condominios en el corazón de Bucerías, Nayarit.')}}</h1>
            </div>

            <div class="col-12 col-lg-4"></div>

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


    </div>


@endsection
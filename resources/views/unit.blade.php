@extends('shared.base')

@section('titles')
    <title>Condominio {{$unit->name}} - The One Residences</title>
    <meta name="description" content="Condominio con {{$unit->view->name_es}} en pre-venta en Bucerías Nayarit con {{$unit->bedrooms}} recámaras y {{$unit->bathrooms}} baños a solo 2 min caminando de la Playa.">

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
@endsection

@section('content')

    @php
        $portada_url = '/media/'.$unit->portrait_path;
        $isometric_url = '/media/'.$unit->isometric_path;
        $blueprint_url = '/media/'.$unit->blueprint_path;
    @endphp

    {{-- Portada  --}}
    <div class="position-relative mb-6">
        <img src="@isset($portada_url){{ $portada_url }}@endisset" alt="Condominio {{$unit->name}}" class="w-100" style="height: 55vh; object-fit:cover;">
        <div class="fondo-oscuro"></div>

        <div class="position-absolute row justify-content-center h-100 z-3 top-0 start-0 text-white">
            <div class="col-11 col-lg-9 align-self-center">
                <div class="ff-oswald d-flex mb-4">
                    <hr class="text-white">
                    <div class="align-self-center fw-bold text-uppercase">Detalles</div>
                </div>
                <h1 class="fs-0">Condominio {{$unit->name}}</h1>
            </div>
        </div>

    </div>

    {{-- Detalles --}}
    <div class="row mb-6 justify-content-evenly">

        <div class="col-12 col-lg-3 align-self-center">
            <div class="ff-oswald text-orange d-flex mb-4">
                <hr>
                <div class="align-self-center fw-bold text-uppercase">Tipo de Condominio</div>
            </div>

            <h2 class="fs-1 mb-4">{{$unit->area}} m2 / <br> <span class="text-orange">{{$unit->bedrooms}} Recámaras</span> </h2>

            <ul class="list-group list-group-flush text-uppercase ff-oswald fw-bold">

                <li class="list-group-item d-flex justify-content-between">
                    <div><i class="fa-solid fa-bed me-2 text-orange"></i> Recámaras</div> <div>{{$unit->bedrooms}}</div>
                </li>
            
                <li class="list-group-item d-flex justify-content-between">
                    <div><i class="fa-solid fa-bath me-2 text-orange"></i> Baños</div> <div>{{$unit->bathrooms}}</div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <div><i class="fa-solid fa-building me-3 text-orange"></i> Piso</div> <div>@if($unit->floor == 0) Planta Baja @else {{$unit->floor}} @endif</div>
                </li>

                <li class="list-group-item">
                    @if ($unit->view_id == 1 and $unit->floor > 1)
                        <i class="fa-solid fa-water text-orange me-2"></i> {{$unit->view->name_es}}
                    @elseif($unit->view_id == 2)
                        <i class="fa-solid fa-road text-orange me-2"></i> {{$unit->view->name_es}}
                    @else
                        <i class="fa-solid fa-leaf text-orange me-2"></i> {{_('Vista al Jardín')}}
                    @endif
                </li>

            </ul>

        </div>

        <div class="col-12 col-lg-5 align-self-center">

            <div id="carouselExampleFade" class="carousel slide carousel-fade">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset( $isometric_url) }}" alt="Condominio {{$unit->name}} The One Residences, Bucerías" class="w-100" data-fancybox="planos">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset( $blueprint_url) }}" alt="Planos del Condominio {{$unit->name}} The One Residences, Bucerías" class="w-100" data-fancybox="planos">
                    </div>
                  
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>

    </div>

    {{-- Interiores, exteriores y Vista --}}
    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link active w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            Interiores
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            Exteriores
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 pe-3" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Vista
          </button>
        </li>

    </ul>

    <div class="tab-content mb-6" id="pills-tabContent">

        {{-- Interiores --}}
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

            <div class="container">

                <div class="row px-0 justify-content-center">
                    <div class="col-12 p-1">
                        <img src="{{asset('/img/interiors/dinning-kitchen.webp')}}" alt="Cocina y área de estar" class="w-100" loading="lazy" style="max-height: 300px; object-fit:cover;" data-fancybox="interiors">
                    </div>
                    <div class="col-6 col-lg-4 p-1">
                        <img src="{{asset('/img/interiors/bedroom.webp')}}" alt="Cocina y área de estar" class="w-100" loading="lazy" style="height: 350px; object-fit:cover;" data-fancybox="interiors">
                    </div>
                    <div class="col-6 col-lg-4 p-1">
                        <img src="{{asset('/img/interiors/kitchen.webp')}}" alt="Cocina y área de estar" class="w-100" loading="lazy" style="height: 350px; object-fit:cover;" data-fancybox="interiors">
                    </div>
                    <div class="col-6 col-lg-4 p-1">
                        <img src="{{asset('/img/interiors/kitchen-terrace.webp')}}" alt="Cocina y área de estar" class="w-100" loading="lazy" style="height: 350px; object-fit:cover;" data-fancybox="interiors">
                    </div>
                </div>
                
            </div>
          
        </div>

        {{-- Exteriores --}}
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 p-1">
                    <img src="{{asset('/img/exteriors/roof-garden.webp')}}" alt="The One Residences Bucerías, exteriores" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="exteriors">
                </div>
                <div class="col-12 col-lg-4 p-1">
                    <img src="{{asset('/img/exteriors/rooftop.webp')}}" alt="The One Residences Bucerías, exteriores" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="exteriors">
                </div>
                <div class="col-12 col-lg-4 p-1">
                    <img src="{{asset('/img/exteriors/the-one-pool.webp')}}" alt="The One Residences Bucerías, exteriores" class="w-100" loading="lazy" style="height: 300px; object-fit:cover;" data-fancybox="exteriors">
                </div>
            </div>
          </div>
        </div>

        {{-- Vista --}}
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="container">
            @if ($unit->view_id == 1)
                <img src="{{ asset('/img/building-views/n'.$unit->floor.'-vista-mar.webp') }}" alt="Vista del Condominio {{$unit->name}}" class="w-100" loading="lazy" data-fancybox="condo-view">
            @else
                <img src="{{ asset('/img/building-views/n'.$unit->floor.'-vista-calle.webp') }}" alt="Vista del Condominio {{$unit->name}}" class="w-100" loading="lazy" data-fancybox="condo-view">
            @endif
          </div>
        </div>

    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/fancybox.umd.js')}}"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection
@extends('shared.base')

@section('titles')
    <title>{{__('Condominio')}} {{$unit->name}} - The One Residences</title>
    <meta name="description" content="{{__('Condominio con')}} @if(app()->getLocale() == 'en') {{$unit->view->name_en}} @else {{$unit->view->name_es}} @endif {{__('en pre-venta en Bucerías Nayarit con')}} {{$unit->bedrooms}} {{__('recámaras y')}} {{$unit->bathrooms}} {{__('baños a solo 2 min caminando de la Playa.')}}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
@endsection

@section('content')

    @php
        $portada_url = '/media/'.$unit->portrait_path;
        $blueprint_url = '/media/'.$unit->blueprint_path;

        if($unit->isometric_path){
            $isometric_url = '/media/'.$unit->isometric_path;
        }
    @endphp

    {{-- Portada  --}}
    <div class="position-relative mb-6">
        <img src="@isset($portada_url){{ $portada_url }}@endisset" alt="Condominio {{$unit->name}}" class="w-100" style="height: 55vh; object-fit:cover;">
        <div class="fondo-oscuro"></div>

        <div class="position-absolute row justify-content-center h-100 z-3 top-0 start-0 text-white">
            <div class="col-11 col-lg-9 align-self-center">
                <div class="ff-oswald d-flex mb-4">
                    <hr class="text-white">
                    <div class="align-self-center fw-bold text-uppercase">{{__('Detalles')}}</div>
                </div>
                <h1 class="fs-0">{{__('Condominio')}} {{$unit->name}}</h1>
            </div>
        </div>

    </div>

    {{-- Detalles --}}
    <div class="row mb-6 justify-content-evenly">

        <div class="col-12 col-lg-3 align-self-center mb-5 mb-lg-0">
            <div class="ff-oswald text-orange d-flex mb-4">
                <hr>
                <div class="align-self-center fw-bold text-uppercase">{{__('Tipo de Condominio')}}</div>
            </div>

            <h2 class="fs-1 mb-4">
                {{$unit->area}} m² / <br> 
                
                @if ($unit->bedrooms == 0)
                    <span class="text-orange">{{__('Estudio')}}</span>  
                @else
                    <span class="text-orange">{{$unit->bedrooms}} {{__('Recámaras')}}</span> 
                @endif
            </h2>

            <ul class="list-group list-group-flush text-uppercase ff-oswald fw-bold">

                <li class="list-group-item d-flex justify-content-between">
                    @if ($unit->bedrooms == 0)
                        <div><i class="fa-solid fa-bed me-2 text-orange"></i> {{__('Estudio')}}</div>
                    @else
                        <div><i class="fa-solid fa-bed me-2 text-orange"></i> {{__('Recámaras')}}</div> <div>{{$unit->bedrooms}}</div>
                    @endif
                </li>
            
                <li class="list-group-item d-flex justify-content-between">
                    <div><i class="fa-solid fa-bath me-2 text-orange"></i> {{__('Baños')}}</div> <div>{{$unit->bathrooms}}</div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <div><i class="fa-solid fa-building me-3 text-orange"></i> {{__('Piso')}}</div> <div>@if($unit->floor == 0) {{__('Planta Baja')}} @else {{$unit->floor}} @endif</div>
                </li>

                <li class="list-group-item">
                    @if ($unit->view_id == 1 and $unit->floor > 1)
                        <i class="fa-solid fa-water text-orange me-2"></i> @if(app()->getLocale() == 'en') {{$unit->view->name_en}} @else {{$unit->view->name_es}} @endif
                    @elseif($unit->view_id == 2)
                        <i class="fa-solid fa-road text-orange me-2"></i> @if(app()->getLocale() == 'en') {{$unit->view->name_en}} @else {{$unit->view->name_es}} @endif
                    @else
                        <i class="fa-solid fa-leaf text-orange me-2"></i> {{__('Vista al Jardín')}}
                    @endif
                </li>

            </ul>

        </div>

        <div class="col-12 col-lg-5 align-self-center">

            <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade" data-bs-theme="dark">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset( $blueprint_url) }}" alt="Planos del Condominio {{$unit->name}} The One Residences, Bucerías" class="w-100" data-fancybox="planos" style="height:380px; object-fit:cover;">
                    </div>

                    @if ($unit->isometric_path)
                        <div class="carousel-item">
                            <img src="{{ asset( $isometric_url) }}" alt="Condominio {{$unit->name}} The One Residences, Bucerías" class="w-100" data-fancybox="planos" style="height:380px; object-fit:cover;">
                        </div>
                    @endif
                  
                </div>

                @if ($unit->isometric_path)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif

            </div>

        </div>

    </div>

    {{-- Interiores, exteriores y Vista --}}
    <ul class="nav nav-pills mb-5 justify-content-center px-2" id="pills-tab" role="tablist">

        <li class="nav-item col-6 col-lg-3 px-2" role="presentation">
          <button class="nav-link active w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            {{__('Interiores')}}
          </button>
        </li>

        <li class="nav-item col-6 col-lg-3 px-2" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            {{__('Exteriores')}}
          </button>
        </li>

        <li class="nav-item col-12 col-lg-3 px-2" role="presentation">
          <button class="nav-link w-100 ps-0 text-uppercase ff-oswald fs-5 fw-bold" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            {{__('Vista')}}
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
                    <div class="col-12 col-lg-4 p-1">
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

    {{-- Planes de pago --}}
    @if ($unit->status == 'Disponible')
        <h4 class="mb-4 text-center text-lightblue fs-1 pt-5" id="plans">{{__('Planes de')}} <span class="text-orange">{{__('Pago')}}</span> </h4>

        <ul class="nav nav-pills mb-5 justify-content-center px-2" id="pills-tab" role="tablist">

            @php
                $k = 1;
                $j = 1;
            @endphp

            @foreach ($plans as $plan)
                <li class="nav-item" role="presentation">
                    <button class="fs-5 ff-oswald text-uppercase nav-link mx-2 @if($k == 1) active @endif" id="pills-plan-nav-{{$plan->id}}" data-bs-toggle="pill" data-bs-target="#pills-plan-tab-{{$plan->id}}" type="button" role="tab" @if($k == 1)aria-selected="true" @endif>
                        {{$plan->name}}
                    </button>
                </li>
                @php $k++; @endphp
            @endforeach
        </ul>

        <div class="tab-content mb-6" id="pills-tabContent">

            @foreach ($plans as $plan)
                @php
                    if(isset($plan->discount)){
                        $discount = $unit->price * ($plan->discount/100);
                        $price = $unit->price - $discount;
                    }else{
                        $price = $unit->price;
                    }

                    $enganche = ($price) * ($plan->down_payment/100);
                    $closing = ($price) * ($plan->closing_payment/100);
                    $meses = ($price) * ($plan->months_percent/100);

                    if( isset($plan->second_payment) ){
                        $second = $price * ($plan->second_payment/100);
                    }

                    if(isset($meses) and isset($plan->months_quantity)){                        
                        $mes = $meses / ($plan->months_quantity);
                    }
                    else{
                        $mes = 0;
                    }
                @endphp

                <div class="tab-pane fade @if($j == 1) show active @endif" id="pills-plan-tab-{{$plan->id}}" role="tabpanel" aria-labelledby="pills-plan-nav-{{$plan->id}}" tabindex="{{$j}}">
                    <div class="row px-1 justify-content-center">

                        <div class="col-12 col-lg-8 col-xl-6 fs-4 bg-light rounded-1 fw-light px-0 shadow-6">

                            <div class="d-flex justify-content-center mb-3 position-relative fs-1 bg-dark py-2 rounded-top-1">
                                <div class="text-center text-white ms-2">{{$plan->name}}</div>
                            </div>

                            <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                <div>{{__('Precio de Lista')}} </div>
                                <div class="text-end @isset($plan->discount) text-decoration-line-through @endisset">${{ number_format($unit->price, 2) }} {{$unit->currency}}</div>
                            </div>

                            @isset($plan->discount)

                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                    <div>{{__('Descuento del')}} {{$plan->discount}}%</div>
                                    <div class="text-end">${{ number_format($discount, 2) }} {{$unit->currency}}</div>
                                </div>

                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3 bg-dark text-white py-2">
                                    <div>{{__('Precio Final')}} </div>
                                    <div class="text-end">${{ number_format($price, 2) }} {{$unit->currency}}</div>
                                </div>

                            @endisset
                            
                            <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                <div>{{$plan->down_payment}}% {{__('de Enganche')}} </div>
                                <div class="text-end">${{ number_format($enganche, 2) }} {{$unit->currency}}</div>
                            </div>

                            @isset ($plan->second_payment)
                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                    <div>{{$plan->second_payment}}% {{__('Segundo Pago')}} </div>
                                    <div class="text-end">${{ number_format($second, 2) }} {{$unit->currency}}</div>
                                </div>
                            @endisset
                            
                            @if ($meses != 0)
                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3 fs-5">
                                    <div>{{$plan->months_percent}}% {{__('en')}} {{$plan->months_quantity}} {{__('Mensualidades')}}</div>
                                    <div class="text-end fs-4">${{ number_format($meses, 2) }} {{$unit->currency}} 
                                        @if($mes != 0)<div class="fs-6">${{number_format($mes,2)}} {{__('por mes')}}</div> @endif
                                    </div>
                                </div>
                            @endif
                            
                            @isset($plan->closing_payment)
                                <div class="d-flex justify-content-between mb-3 px-1 px-lg-3">
                                    <div>{{$plan->closing_payment}}% {{__('Pago Final')}} </div>
                                    <div class="text-end">${{ number_format($closing, 2) }} {{$unit->currency}}</div>
                                </div>
                            @endisset

                        </div>

                        <div class="w-100"></div>

                    </div>
                </div>

                @php $j++; @endphp
            @endforeach

            {{-- Botón de Volver --}}
            <div class="text-center">
                <a href="{{route('inventory')}}" class="btn btn-orange text-center shadow-6 z-3 m-3 fs-5">
                    <i class="fa-solid fa-chevron-left"></i> {{__('Volver')}}
                </a>
            </div>

        </div>

        @if(session('message'))
            <div class="text-center text-white fs-2 mb-6">
                <i class="fa-regular fa-circle-check"></i> {{__(session('message'))}}
            </div>
        @endif

    @endif

@endsection

@section('javascript')
    <script src="{{asset('js/fancybox.umd.js')}}"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection
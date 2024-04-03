<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#212529">
    <meta name="msapplication-TileImage" content="{{asset('/img/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#212529">
    
    <title>The One Residences - {{__('Condominios en Bucerías Nayarit con vista al mar')}}</title>
    <meta name="description" content="{{__('The One Residences es un desarrollo inmobiliario en Bucerías Nayarit con condominios en preventa ubicados a solo 2 minutos caminando de la playa. Descubre tu hogar en el paraíso con nuestras residencias de lujo diseñadas con la más alta calidad y comodidad. Conoce nuestras opciones de departamentos en venta y aprovecha la oportunidad de vivir en uno de los lugares más exclusivos de la Riviera Nayarit')}}">

    <link rel="preload" href="{{asset('css/fancybox.min.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
    
    @vite(['resources/css/app.css'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M81FWTRVXQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-M81FWTRVXQ');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WN8S7KWL');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN8S7KWL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    {{-- Inicio --}}
    <div class="position-relative">

        <div class="row justify-content-evenly position-absolute h-100 top-0 start-0 z-3">
    
          <div class="col-12 col-lg-5 align-self-end h-70 border-start border-2 px-3 px-lg-4">
            <div class="ff-oswald text-white mb-5 fs-5">THE ONE RESIDENCES</div>
            <h1 class="fs-0 text-white mb-5">{{__('Condominios en el corazón de Bucerías, Nayarit.')}}</h1>
            <button type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn link-light text-decoration-none fs-4">{{__('Contacto')}} <i class="fa-solid fa-right-long"></i></button>
          </div>
    
          <div class="col-12 col-lg-3"></div>
    
        </div>
    
        <div class="fondo-oscuro z-2"></div>
    
        <div id="carouselExample" class="carousel slide carousel-fade position-relative z-1"  data-bs-ride="carousel">
    
          <div class="carousel-inner">
    
            <div class="carousel-item active">
                <img src="{{asset('/img/exteriors/terrace.webp')}}" class="d-block w-100" alt="The One Residences - Terraza" loading="lazy" style="height:100vh; object-fit:cover;">
            </div>
    
            <div class="carousel-item">
                <img src="{{asset('/img/exteriors/pool-terrace.webp')}}" class="d-block w-100" alt="The One Residences - Terraza y alberca" loading="lazy" style="height:100vh; object-fit:cover;">
            </div>
    
            <div class="carousel-item">
                <img src="{{asset('/img/exteriors/rooftop-pool.webp')}}" class="d-block w-100" alt="The One Residences - Terraza" loading="lazy" style="height:100vh; object-fit:cover;">
            </div>
    
          </div>
    
        </div>
    
        <button type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-orange position-absolute text-uppercase end-0 top-50 z-3 fs-4 d-none d-lg-block" style="transform: rotate(90deg);  transform-origin: right; margin-right:25px;">
            {{__('Contacto')}}
        </button>
        
    
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
        {{__('La ubicación de The One en Bucerías, conjuga las riquezas más grandes de este exclusivo destino, su playa y el interior del pueblo. Por ello, ofrece la mejor ubicación en la Zona Dorada, donde se puede escuchar el sonido de las olas del mar y oler la esencia del agua salada, donde se podrá disfrutar de las espectaculares puestas del sol, practicar deportes de mar y disfrutar de la vida trendy que ofrece esta zona. Ubicado en el corazón de Bucerías en la Calle Lázaro Cárdenas #43 entre la calles Morelos y Galeana, a unos pasos de la playa. The One reúne una visión de amenidades de estilo de vida de lujo dentro de un entorno boutique sin igual en el área.')}}
        </p>

    </div>

    <div class="col-12 col-lg-4">
        <img src="{{asset('/img/front-side-view.webp')}}" alt="Dinning area - The One Residences" class="w-100" loading="lazy">
    </div>

    </div>

    {{-- Lugares cerca --}}
    <div class="row justify-content-evenly position-relative mb-6 pt-5" style="background-image: url('{{asset('/img/interiors/living-room-view.webp')}}'); background-repeat: no-repeat;background-size:cover; background-position:center;">

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
            <div class="fs-3">{{__('Fitness Center')}}</div>
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
            <p>{{__('Área comercial en planta baja del edificio')}}</p>
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
        <button type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-orange fs-5 align-self-center col-12 col-lg-3 d-none d-lg-block">{{__('Ver Inventario')}} <i class="fa-solid fa-right-long"></i></button>
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
                    {{__('El CMQ se encuentra a sólo 4 minutos en auto, lo cual puede ser esencial para garantizar una atención médica rápida en caso de emergencia, así como para brindar mayor tranquilidad y acceso a servicios médicos especializados.')}}
                </p>
                </div>
            </li>

            <li class="list-group-item bg-transparent">
                <a class="link-dark text-decoration-none fw-bold ff-oswald fs-5 d-flex" data-bs-toggle="collapse" href="#collapseMarket" role="button" aria-expanded="false" aria-controls="collapseMarket">
                <i class="fa-solid fa-store me-1 align-self-center"></i> {{__('Supermercado')}} <i class="ms-auto fa-solid fa-chevron-down"></i>
                </a>
                <div class="collapse" id="collapseMarket">
                <p class="p-2">
                    {{__('El supermercado está a sólo 7 minutos en auto, lo cual brinda comodidad, ahorro de tiempo y dinero, mayor variedad de productos y mayor disponibilidad de productos frescos y de temporada.')}}
                </p>
                </div>
            </li>

            </ul>

            <button type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-orange fs-5 align-self-center w-100 d-block d-lg-none">{{__('Contactar')}} <i class="fa-solid fa-right-long"></i></button>

        </div>

        </div>

    </div>
    </div>

    {{-- Galería --}}
    @include('shared.gallery')


    {{-- Footer --}}
    @if (Route::currentRouteName() != 'contact.es' or Route::currentRouteName() != 'contact.en')
        <div class="p-4 p-lg-5 row justify-content-evenly bg-orange">
            <h6 class="fs-1 col-12 col-lg-4 text-center text-lg-start">{{__('Contacta un agente')}}</h6>
            <button type="button" class="btn btn-dark fs-5 text-uppercase align-self-center rounded-0 col-12 col-lg-2" data-bs-toggle="modal" data-bs-target="#contactModal">
                {{__('Contactar')}} <i class="fa-solid fa-right-long"></i>
            </button>
        </div>
    @endif

    {{-- Modal de contacto --}}
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">

                <div class="modal-header">
                    <div class="modal-title fs-4 ff-oswald text-orange" id="contactModalLabel">{{__('Contacta para más información')}}</div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-white fs-6 mb-4 ff-oswald">{{__('No te pierdas esta oportunidad, contáctame para que puedas disfrutar de tu nueva propiedad lo antes posible')}}</div>
                    @include('shared.contact-form')
                </div>
            
            </div>
        </div>
    </div>

    @if ( session('contact_message') )

        {{-- Modal de confirmación --}}
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark">

                    <div class="modal-header">
                        <div class="modal-title fs-5 ff-oswald text-orange" id="confirmationModalLabel">{{__('Gracias por contactar')}}</div>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center py-4">
                        <div class="text-white fs-4 mb-1"><i class="fa-regular fa-circle-check"></i> {{ __(session('contact_message')) }}</div>
                        <div class="fs-6 mb-3 text-white">{{__('Nos contactaremos con usted lo mas pronto posible')}}</div>
                    </div>
                
                </div>
            </div>
        </div>
        
    @endif

    {{-- Lenguaje --}}
    @include('shared.lang-btn')

    <a href="{{route('quoter')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Obtén una cotización')}}"
        class="text-decoration-none btn position-fixed d-flex justify-content-center shadow-4 rounded-circle text-white shadow-3 btn-dark" 
        style="right:20px; bottom:100px; width:60px; height:60px; font-size:35px; z-index:4;">

        <i class="fa-solid fa-hand-holding-dollar"></i>
    </a>

    {{-- WhatsApp --}}
    <a id="whatsapp" href="https://wa.me/5213322005523?text={{__("Hola, vengo del sitio web de The One Bucerías")}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-title="{{__('Envíanos un mensaje')}}"
        class="text-decoration-none position-fixed d-flex justify-content-center shadow-4 rounded-circle text-white z-3 shadow-3 btn btn-dark" 
        style="right:20px; bottom:30px; width:60px; height:60px; font-size:45px;">

        <i class="fa-brands align-self-center fa-whatsapp"></i>
    </a>

    <footer class="position-relative pt-5" style="background-image: url('{{asset('/img/footer_background.webp')}}')">

        <div class="fondo-oscuro"></div>

        <div class="container pb-5">
            <div class="row justify-content-between position-relative z-2">

                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <img src="{{asset('/img/the-one-logo-white.webp')}}" alt="Logo The One Residences" width="200px" class="d-block mb-4 mx-auto me-lg-auto">
        
                    <a href="mailto:info@domusvallarta.com" class="link-light d-block text-decoration-none mb-3">
                        <i class="fa-solid fa-envelope"></i> info@domusvallarta.com
                    </a>
        
                    <a href="https://goo.gl/maps/gF2Tp3yJffcd44nZA" class="link-light text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-house-chimney"></i> {{__('Calle')}} Lazaro Cardenas #43 {{__('esq.')}} Galeana 63732, Bucerias, Nayarit.
                    </a>
                    
                </div>
        
                <div class="col-12 col-lg-2">
                </div>

                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                    <div class="text-white fw-light mb-3">{{__('Las imagenes son con fines ilustrativos. Precios y dimensiones pueden cambiar sin previo aviso.')}}</div>
                    <div class="text-white fw-light">The One Residences © {{date('Y')}}.</div>
                </div>
        
            </div>
        </div>

        <div class="fs-6 py-2 text-center position-relative z-2">
            <a class="link-light" href="https://punto401.com/">{{__('Sitio web creado por Punto401 Maketing')}}</a>
        </div>
        
    </footer>

    <script src="{{asset('/js/splide.min.js')}}" defer></script>
    <script src="{{asset('js/fancybox.umd.js')}}" defer></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        });
    </script>

    @vite(['resources/js/app.js'])
    
</body>

</html>
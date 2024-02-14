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
    
    <title>The One Residences - {{__('Agendar Cita')}}</title>
    <meta name="description" content="{{__('The One Residences es un desarrollo inmobiliario en Bucerías Nayarit con condominios en preventa ubicados a solo 2 minutos caminando de la playa. Descubre tu hogar en el paraíso con nuestras residencias de lujo diseñadas con la más alta calidad y comodidad. Conoce nuestras opciones de departamentos en venta y aprovecha la oportunidad de vivir en uno de los lugares más exclusivos de la Riviera Nayarit')}}">

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
    
          <div class="col-12 col-lg-6 align-self-end h-70 border-start border-2 px-3 px-lg-4">
            <div class="ff-oswald text-white mb-5 fs-5">THE ONE RESIDENCES</div>
            <h1 class="fs-0 text-white mb-5">{{__('Agenda una cita')}} <br> {{__('para conocer')}} <br> The One Residences</h1>
            <a href="#contact" class="btn link-light text-decoration-none fs-4">{{__('Contacto')}} <i class="fa-solid fa-right-long"></i></a>
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
    
    </div>
    
    {{-- Agendar cita --}}
    @include('shared.appointment')

    {{-- Galería --}}
    @include('shared.gallery')
    
    {{-- Lenguaje --}}
    @include('shared.lang-btn')

    {{-- WhatsApp --}}
    <a id="whatsapp" href="https://wa.me/5213322005523?text={{__("Hola, vengo del sitio web de The One Bucerías")}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-title="{{__('Envíanos un mensaje')}}"
        class="text-decoration-none position-fixed d-flex justify-content-center shadow-4 rounded-circle text-white z-3 shadow-3 btn btn-dark" 
        style="right:20px; bottom:30px; width:60px; height:60px; font-size:45px;">

        <i class="fa-brands align-self-center fa-whatsapp"></i>
    </a>

    {{-- Footer --}}
    @if (Route::currentRouteName() != 'contact.es' or Route::currentRouteName() != 'contact.en')
        <div class="p-4 p-lg-5 row justify-content-evenly bg-orange">
        </div>
    @endif

   

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
    @vite(['resources/js/app.js'])
    
</body>

</html>
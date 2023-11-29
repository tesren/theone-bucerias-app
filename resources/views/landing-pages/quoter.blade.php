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
            <h1 class="fs-0 text-white mb-5">{{__('Compara y escoge el plan ideal para ti')}}</h1>
            <a href="#calculator" class="btn link-light text-decoration-none fs-4">{{__('Cotizar')}} <i class="fa-solid fa-right-long"></i></a>
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
    
        <button type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-orange position-absolute text-uppercase end-0 top-50 z-3 fs-4 d-none d-lg-block" style="transform: rotate(90deg);  transform-origin: right; margin-right:25px;">
            {{__('Contacto')}}
        </button>
        
    
    </div>
    
    {{-- Cálculos --}}
    <div class="row justify-content-evenly py-5  mx-auto w-100" id="calculator">

        <div class="col-11 col-lg-4 text-white card rounded-0 p-3 align-self-center mb-3 mb-lg-0 bg-orange">

            <h2 class="fw-bold-agrandir fs-3 mb-2">{{__('Compara precios y planes')}}</h2>

            <form action="" method="get">

                <label for="unit_id" class="fw-bold text-white">{{__('Seleccione una')}}</label>
                <select name="unit_id" id="unit_id" class="form-select mb-3" onchange="updateCalculations()">
                        <option value="" selected>{{__('Seleccione una')}}</option>
                    @foreach ($units as $unit)
                        <option value="{{$unit->id}}">{{__('Unidad')}} {{$unit->name}} - {{$unit->bedrooms}} {{__('Recámaras')}}, {{$unit->area}}m²</option>
                    @endforeach
                </select>

                {{-- <a href="#unitsModal" data-bs-toggle="modal" data-bs-target="#unitsModal" class="link-light d-block mb-3">Conoce las Unidades</a> --}}

                <label for="plan_id" class="fw-bold text-white">{{__('Escoge un plan')}}</label>
                <select name="plan_id" id="plan_id" class="form-select mb-2" onchange="updateCalculations()">
                    @foreach ($plans as $plan)
                        <option value="{{$plan->id}}">{{__('Plan')}} - {{$plan->name}}</option>
                    @endforeach
                </select>

            </form>
        </div>

        <div class="col-11 col-lg-5 px-0">

            <table class="table table-light table-striped shadow-6 table-bordered">
                <thead>
                    <tr>
                        <th class="text-center fs-4" colspan="2">
                            {{__('Unidad')}} - <span id="unit_name"></span> | 
                            {{__('Plan')}} - <span id="plan_name"></span>
                        </th>
                    </tr>
                </thead>

                <tbody class="fs-5 fw-light">
                    <tr>
                        <td>{{__('Precio de Lista')}}</td>
                        <td id="price"></td>
                    </tr>

                    <tr id="discount_row" class="">
                        <td>
                            {{__('Descuento')}} (<span id="discount_percent"></span>%)
                        </td>
                        <td id="discount_amount"></td>
                    </tr>

                    <tr>
                        <td>{{__('Enganche')}} (<span id="down_percent"></span>%)</td>
                        <td id="down_amount"></td>
                    </tr>

                    <tr id="months_row" class="">
                        <td>{{__('Pagos Mensuales')}} (<span id="month_percent"></span>%)</td>
                        <td id="month_amount"></td>
                    </tr>

                    <tr>
                        <td>{{__('Pago Final')}} (<span id="final_percent"></span>%)</td>
                        <td id="final_amount"></td>
                    </tr>

                    <tr>
                        <td class="fw-bold">{{__('Precio Final')}}</td>
                        <td class="fw-bold" id="final_price"></td>
                    </tr>

                </tbody>

            </table>

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

    {{-- JS --}}
    <script>
        let arrayUnits = @json( json_encode($units) );
        arrayUnits = JSON.parse(arrayUnits);
        //console.log(arrayUnits);

        let arrayPlans = @json( json_encode($plans) );
        arrayPlans = JSON.parse(arrayPlans);
        //console.log(arrayPlans);

        let unit_input = document.getElementById('unit_id');
        let plan_input = document.getElementById('plan_id');

        //table cells
        let unit_name = document.getElementById('unit_name');
        let plan_name = document.getElementById('plan_name');
        let price_cell = document.getElementById('price');
        let discount_percent = document.getElementById('discount_percent');
        let discount_amount = document.getElementById('discount_amount');
        let down_percent = document.getElementById('down_percent');
        let down_amount = document.getElementById('down_amount');
        let final_percent = document.getElementById('final_percent');
        let final_amount = document.getElementById('final_amount');
        let final_price = document.getElementById('final_price');
        let month_percent = document.getElementById('month_percent');
        let month_amount = document.getElementById('month_amount');
        const months_row = document.getElementById('months_row');
        const discount_row = document.getElementById('discount_row');


        function updateCalculations(){

            let selectedUnit;
            let selectedPlan;

            arrayUnits.forEach(unit => {
                if(unit.id == unit_input.value){
                    unit_name.innerHTML = unit.name
                    selected_unit = unit;
                }
            });

            arrayPlans.forEach(plan => {
                if(plan.id == plan_input.value){
                    plan_name.innerHTML = plan.name
                    discount_percent.innerHTML = plan.discount;
                    selected_plan = plan;
                }
            });

            // number formatter.
            var formatter = new Intl.NumberFormat('es-MX', {
                style: 'currency',
                currency: selected_unit.currency,
            });

            //precio de lista
            let formatted_price = formatter.format(selected_unit.price);
            price_cell.innerHTML = formatted_price;

            //descuento
            let discounted = selected_unit.price * (selected_plan.discount/100);
            discount_amount.innerHTML = formatter.format(discounted);
            if(selected_plan.discount == 0 || selected_plan.discount == null){
                discount_row.classList = 'd-none';
            }else{
                discount_row.classList = ' ';
            }

            //precio con descuento
            discounted_price = selected_unit.price - discounted;
            final_price.innerHTML = formatter.format(discounted_price);

            //enganche
            let down_payment = discounted_price * (selected_plan.down_payment/100);
            down_percent.innerHTML = selected_plan.down_payment;
            down_amount.innerHTML = formatter.format(down_payment);

            //mensualidades
            let month_payment = discounted_price * (selected_plan.months_percent/100);
            month_percent.innerHTML = selected_plan.months_percent;
            month_amount.innerHTML = formatter.format(month_payment);
            if(selected_plan.months_percent == 0 || selected_plan.months_percent == null){
                months_row.classList = 'd-none';
            }else{
                months_row.classList = ' ';
            }

            //pago final
            let final_payment = discounted_price * (selected_plan.closing_payment/100);
            final_percent.innerHTML = selected_plan.closing_payment;
            final_amount.innerHTML = formatter.format(final_payment);

        }
    </script>
    <script src="{{asset('/js/splide.min.js')}}" defer></script>
    @vite(['resources/js/app.js'])
    
</body>

</html>
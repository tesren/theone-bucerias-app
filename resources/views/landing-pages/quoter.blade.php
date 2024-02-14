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
            <h1 class="fs-0 text-white mb-5">{{__('Compara y escoge el plan ideal para ti')}}</h1>
            <a href="#calculator" class="btn link-light text-decoration-none fs-4">{{__('Cotizar')}} <i class="fa-solid fa-right-long"></i></a>
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

    {{-- Menú de navegación --}}
    <ul class="nav nav-pills mb-4 justify-content-center mt-6" id="pills-tab" role="tablist">
        @php $i = 1; @endphp
        @foreach ($views as $view)
            <li class="nav-item ff-oswald fs-4 mx-3" role="presentation">
                <button class="nav-link @if($i == 2) active @endif" id="pills-{{$view->id}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$view->id}}" type="button" role="tab" aria-controls="pills-{{$view->id}}" @if($i == 2) aria-selected="true" @endif>
                    @if (app()->getlocale() == 'es')
                        {{$view->name_es}}
                    @else
                        {{$view->name_en}}
                    @endif
                </button>
            </li>
            @php $i++; @endphp
        @endforeach
    </ul>

    <h2 class="mb-5 text-center fw-light fs-3">{{__('Haga clic en una unidad para ver más detalles')}}</h2>

    <div class="row justify-content-center">

        {{-- Vistas --}}
        <div class="col-12 col-lg-9 col-xl-7 col-xxl-6 position-relative px-0">
            <div class="tab-content mb-6" id="pills-tabContent">
                @php $j = 1; @endphp
                @foreach ($views as $view)
        
                    @php
                        $url = '/media/'.$view->img_path;
                    @endphp
        
                    <div class="tab-pane fade @if($j == 2) show active @endif" id="pills-{{$view->id}}" role="tabpanel" aria-labelledby="pills-{{$view->id}}-tab" tabindex="{{$j}}">
                        
                        <div class="svg-container">

                            <img src="@isset($url) {{asset($url)}} @endisset" alt="{{$view->name_es}}" class="w-100 rounded-3">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0" viewBox="{{$view->view_box}}">
                                @foreach ($view->units as $unit )

                                    <a href="#calculator" onclick="selectOption('{{$unit->id}}')" class="text-decoration-none position-relative">
                                        
                                        <polygon class="building-{{strtolower($unit->status)}}" points="{{ $unit->shape->points ?? '0,0'}}"></polygon>

                                        <text x="{{$unit->shape->text_x ?? 0;}}" 
                                            y="{{$unit->shape->text_y ?? 0; }}"
                                            font-size="36" font-weight="bold" fill="#fff" class="fw-light">
                                            {{$unit->name}}
                                        </text>
                                        
                                    </a>
                                @endforeach
                            </svg>

                        </div>

                    </div>
        
                    @php $j++; @endphp
                @endforeach
            </div>

            {{-- Simbología --}}
            <ul class="position-absolute end-0 top-0 p-2 p-lg-4 list-unstyled bg-glass text-white">
                <li class="fw-bold mb-1">{{__('Disponibilidad')}}</li>
                <li><i class="fa-solid fa-square text-success"></i> {{__('Disponible')}}</li>
                <li><i class="fa-solid fa-square text-warning"></i> {{__('Apartado')}}</li>
                <li><i class="fa-solid fa-square text-danger"></i> {{__('Vendido')}}</li>
            </ul>

        </div>


    </div>
    
    {{-- Cálculos --}}
    <div class="row justify-content-evenly py-5  mx-auto w-100" id="calculator">

        <div class="col-11 col-lg-4 text-white card rounded-0 p-3 align-self-center mb-3 mb-lg-0 bg-dark">

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
                        <option value="{{$plan->id}}">{{__('Plan')}} - @if(app()->getLocale()=='es') {{$plan->name}} @else {{$plan->name_en}} @endif</option>
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

                    <tr id="second_row" class="">
                        <td>{{__('Segundo pago')}} (<span id="second_percent"></span>%)</td>
                        <td id="second_amount"></td>
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

            <div class="text-center">
                <button type="button" class="btn btn-orange" disabled id="download_button" data-bs-toggle="modal" data-bs-target="#downloadModal">
                    <i class="fa-solid fa-download"></i> {{__('Download')}} PDF
                </button>
            </div>

        </div>
    </div>

    {{-- Agendar cita --}}
    @include('shared.appointment')
    
    {{-- Galería --}}
    @include('shared.gallery')

    {{-- Footer --}}
    <div class="p-4 p-lg-5 row justify-content-evenly bg-orange"></div>

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

    {{-- Modal de descarga --}}
    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">

                <div class="modal-header text-white">
                    <div class="modal-title fs-5 fw-bold" id="downloadModalLabel">{{__('Descargar')}} PDF</div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p class="fw-light text-white">{{__('Rellena el formulario a continuación y reciba un PDF detallado de la cotización')}}</p>
                    <form action="{{route('send.email')}}#sh_contact_form" method="post" onsubmit="disableBtn()">
                        @csrf
                        <x-honeypot />
                
                        <input class="form-contact mb-3" type="text" name="name" id="contact_name" required placeholder="{{__('Nombre')}}">
                
                        <input class="form-contact mb-3" type="email" name="email" id="contact_email" required placeholder="{{__('Email')}}">
                
                        <input class="form-contact mb-3" type="number" name="phone" id="contact_tel" required placeholder="{{__('Teléfono')}}">
                
                        <textarea class="form-contact mb-3" name="message" id="contact_msg" cols="30" rows="3" placeholder="{{__('Mensaje')}}(opcional)"></textarea>
                
                        <input type="hidden" name="url" value="{{ request()->fullUrl() }}">

                        <input type="hidden" id="down_unit_id" name="down_unit_id" value="">
                        <input type="hidden" id="down_plan_id" name="down_plan_id" value="">
                
                        <button id="download_submit" class="btn btn-orange w-100 mb-4" type="submit" @if(session('contact_message')) disabled @endif>{{__('Enviar')}}</button>
                    </form>
                </div>

                @if (session('contact_message'))
                    <div class="modal-footer text-center" style="color: #198754;">
                        <i class="far fa-check-circle"></i>
                        {{ __(session('contact_message')) }}
                    </div>           
                @endif

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

    <a href="{{route('appointment')}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Agenda una cita')}}"
        class="text-decoration-none btn position-fixed d-flex justify-content-center shadow-4 rounded-circle text-white shadow-3 btn-dark" 
        style="right:20px; bottom:100px; width:60px; height:60px; font-size:35px; z-index:4;">

        <i class="fa-regular fa-calendar-check" style="line-height:1.3;"></i>
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

    {{-- JS --}}
    <script>
        let arrayUnits = @json( json_encode($units) );
        arrayUnits = JSON.parse(arrayUnits);
        //console.log(arrayUnits);

        let arrayPlans = @json( json_encode($plans) );
        arrayPlans = JSON.parse(arrayPlans);
        //console.log(arrayPlans);

        //descargar pdf
        let unit_input = document.getElementById('unit_id');
        let plan_input = document.getElementById('plan_id');
        let hinput_unit = document.getElementById('down_unit_id');
        let download_button = document.getElementById('download_button');
        let hinput_plan = document.getElementById('down_plan_id');

        //table cells
        let unit_name = document.getElementById('unit_name');
        let plan_name = document.getElementById('plan_name');
        let price_cell = document.getElementById('price');
        let discount_percent = document.getElementById('discount_percent');
        let discount_amount = document.getElementById('discount_amount');
        let down_percent = document.getElementById('down_percent');
        let down_amount = document.getElementById('down_amount');
        let second_percent = document.getElementById('second_percent');
        let second_amount = document.getElementById('second_amount');
        let final_percent = document.getElementById('final_percent');
        let final_amount = document.getElementById('final_amount');
        let final_price = document.getElementById('final_price');
        let month_percent = document.getElementById('month_percent');
        let month_amount = document.getElementById('month_amount');
        const months_row = document.getElementById('months_row');
        const discount_row = document.getElementById('discount_row');

        function disableBtn(){
            let download_submit = document.getElementById('download_submit');
            download_submit.disabled = true;
        }

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

            //segundo pago
            let second_payment = discounted_price * (selected_plan.second_payment/100);
            second_percent.innerHTML = selected_plan.second_payment;
            second_amount.innerHTML = formatter.format(second_payment);
            if(selected_plan.second_payment == 0 || selected_plan.second_payment == null){
                second_row.classList = 'd-none';
            }else{
                second_row.classList = ' ';
            }

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

            //modal de descarga
            download_button.disabled = false;
            hinput_unit.value = selected_unit.id;
            hinput_plan.value = selected_plan.id;

        }

        function selectOption(unitId) {
            // Obtén el select por su ID
            var selectElement = document.getElementById('unit_id');

            // Encuentra la opción correspondiente al unitId y establécela como seleccionada
            var option = selectElement.querySelector('option[value="' + unitId + '"]');
            if (option) {
                option.selected = true;
            }

            // Puedes agregar una llamada a la función de actualización aquí si es necesario
            updateCalculations();
        }
    </script>
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
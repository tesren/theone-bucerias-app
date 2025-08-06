@php
    $contact = request()->query('contact');
@endphp

@if ($contact != 'no')
    @if (Route::currentRouteName() != 'contact.es' or Route::currentRouteName() != 'contact.en')
        <div class="p-4 p-lg-5 row justify-content-evenly bg-orange">
            <h6 class="fs-1 col-12 col-lg-4 text-center text-lg-start">{{__('Contacta un agente')}}</h6>
            <button type="button" class="btn btn-dark fs-5 text-uppercase align-self-center rounded-0 col-12 col-lg-2" data-bs-toggle="modal" data-bs-target="#contactModal">
                {{__('Contactar')}} <i class="fa-solid fa-right-long"></i>
            </button>
        </div>
    @endif    
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
    
                @if ($contact != 'no')
                    <a href="mailto:info@domusvallarta.com" class="link-light d-block text-decoration-none mb-3">
                        <i class="fa-solid fa-envelope"></i> info@domusvallarta.com
                    </a>

                    <a href="tel:+523322005523" class="link-light d-block text-decoration-none mb-3"><i class="fa-solid fa-phone"></i> +52 332 200 5523</a>
                @endif
    
                <a href="https://goo.gl/maps/gF2Tp3yJffcd44nZA" class="link-light text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-house-chimney"></i> {{__('Calle')}} Lazaro Cardenas #43 {{__('esq.')}} Galeana 63732, Bucerias, Nayarit.
                </a>
                
            </div>
    
            <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                <div class="text-orange mb-4">{{__('Menú')}}</div>

                <div class="list-group list-group-flush">
                    <a href="{{route('home', request()->query() )}}" class="list-group-item link-light bg-transparent ps-0">{{__('Inicio')}}</a>
                    <a href="{{route('inventory', request()->query() )}}" class="list-group-item link-light bg-transparent ps-0">{{__('Condominios')}}</a>
                    <a href="{{route('about', request()->query() )}}" class="list-group-item link-light bg-transparent ps-0">{{__('Nosotros')}}</a>

                    @if ($contact != 'no')
                        <a href="{{route('contact', request()->query() )}}" class="list-group-item link-light bg-transparent ps-0">{{__('Contacto')}}</a>
                    @endif

                    <a href="{{route('policy', request()->query() )}}" class="list-group-item link-light bg-transparent ps-0">{{__('Políticas de Privacidad')}}</a>
                </div>

            </div>


            <div class="col-12 col-lg-3 mb-5 mb-lg-0">

                @if ($contact != 'no')

                    <div class="text-orange mb-4">{{__('Comercializador exclusivo')}}</div>

                    <a href="https://domusvallarta.com/" class="text-decoration-none d-block mb-4">
                        <img class="w-100" src="{{asset('/img/domus-logo-white.svg')}}" alt="Domus Vallarta Inmobiliaria">
                    </a>

                @endif

                <div class="text-white fw-light mb-3">{{__('Las imagenes son con fines ilustrativos. Precios y dimensiones pueden cambiar sin previo aviso.')}}</div>
                <div class="text-white fw-light">The One Residences © {{date('Y')}}.</div>
            </div>
    
        </div>
    </div>

    <div class="fs-6 py-2 text-center position-relative z-2">
        <a class="link-light" href="https://punto401.com/">{{__('Sitio web creado por Punto401 Marketing')}}</a>
    </div>
    
</footer>

@if ($contact != 'no')
     {{-- WhatsApp --}}
    <a id="whatsapp" href="https://wa.me/5213322005523?text={{__("Hola, vengo del sitio web de The One Bucerías")}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-title="{{__('Envíanos un mensaje')}}"
        class="text-decoration-none position-fixed d-none d-lg-flex justify-content-center shadow-4 rounded-circle text-white z-3 shadow-3 btn btn-dark" 
        style="right:20px; bottom:30px; width:60px; height:60px; font-size:45px;">

        <i class="fa-brands align-self-center fa-whatsapp"></i>
    </a>

    <div class="sticky-bottom px-0 py-2 d-block d-lg-none bg-orange border-top border-light">
        <div class="row">

            <div class="col-7 lh-sm">
                <div class="fw-light fs-7">
                    WhatsApp
                </div>
                <div class="fs-5">{{__('Envíanos un mensaje')}}</div>
            </div>

            <div class="col-5 align-self-center">
                <a class="btn btn-dark w-100 rounded-0 fs-6" href="https://wa.me/5213322005523?text={{__("Hola, vengo del sitio web de The One Bucerías")}}" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                </a>
            </div>

        </div>
    </div>

@endif
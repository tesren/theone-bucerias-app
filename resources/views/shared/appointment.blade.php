<div class="row justify-content-evenly my-6" id="contact">
    
    <div class="col-12 col-lg-4 mb-5 mb-lg-0">

        <div class="d-flex ff-oswald text-orange fs-5 mb-4"><hr> {{__('Contacto')}}</div>
        <h2 class="mb-4">{{__('Agenda tu Cita: ¡Estamos Listos para Atenderte!')}}</h2>       
        <p class="fs-5 mb-5">{{__('Contáctanos por cualquiera de los siguientes medios o a través de nuestro formulario de contacto y con gusto lo atenderemos.')}}</p>
        
        @php
            $formatted_phone = preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1 $2 $3', config('domus.phone_number') );
        @endphp

        <a href="tel:+52{{config('domus.phone_number')}}" class="d-block link-dark fs-5 mb-3 text-decoration-none">
            <i class="fa-solid fa-mobile-screen-button"></i> 
            +52 {{$formatted_phone}}
        </a>

        <a href="mailto:info@domusvallarta.com" class="d-block link-dark fs-5 text-decoration-none">
            <i class="fa-regular fa-envelope"></i>
            info@domusvallarta.com
        </a>

    </div>
    
    <div class="col-12 col-lg-4">

        @php
            use Carbon\Carbon;
            // Obtener la fecha del día de mañana
            $tomorrow = Carbon::tomorrow();
            $tomorrowString = $tomorrow->toDateString();
            $today = Carbon::now();
            // Agregar un año a la fecha de hoy
            $oneYear = $today->addYear();
            $oneYearString = $oneYear->toDateString();
        @endphp

        <form action="{{route('send.email')}}" method="post">
            @csrf
            <x-honeypot />
            <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255" value="{{ old('name') }}">
            <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255" value="{{ old('email') }}">
            <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0" value="{{ old('phone') }}">

            <label class="ff-oswald mb-2">{{__('¿Cómo le gustaría ser contactado?')}}</label>
            <div class="d-flex">
                <div class="form-check mb-3 text-dark">
                    <input class="form-check-input" type="radio" checked name="contact_method" id="radio_correo" value="Correo">
                    <label class="form-check-label" for="radio_correo">
                        {{__('Email')}}
                    </label>
                </div>
                <div class="form-check mb-3 text-dark mx-3">
                    <input class="form-check-input" type="radio" name="contact_method" id="radio_phone" value="Teléfono">
                    <label class="form-check-label" for="radio_phone">
                        {{__('Teléfono')}}
                    </label>
                </div>
                <div class="form-check mb-3 text-dark">
                    <input class="form-check-input" type="radio" name="contact_method" id="radio_wp" value="WhatsApp">
                    <label class="form-check-label" for="radio_wp">
                        {{__('WhatsApp')}}
                    </label>
                </div>
            </div>
            
            <label for="ap_date" class="ff-oswald mb-2">{{__('Fecha para la cita')}}</label>
            <input type="date" class="form-contact mb-3" name="ap_date" id="ap_date" required min="{{$tomorrowString}}" max="{{$oneYearString}}">

            <label for="ap_date" class="ff-oswald mb-2">{{__('Hora para la cita')}}</label>
            <input type="time" class="form-contact mb-4" name="ap_time" id="ap_time">

            <textarea class="form-contact mb-3" name="message" id="message" cols="30" rows="3" placeholder="{{__('Mensaje')}}" maxlength="255">{{ old('message') }}</textarea>
        
            <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
            <input type="hidden" name="utm_campaign" value="{{ request()->query('utm_campaign') }}">
        
            <div class="row justify-content-center mt-4">
                <button type="submit" class="btn btn-orange rounded-0">{{__('Enviar')}}</button>
            </div>
        
        </form>
    </div>

</div>

@if (session('contact_message'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      gtag('event', 'generate_lead', {'currency': 'MXN', 'value': 1});
    });
  </script>
@endif
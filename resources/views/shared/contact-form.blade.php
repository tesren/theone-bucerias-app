<form action="{{route('send.email')}}" method="post">
    @csrf
    <x-honeypot />
    <input type="text" class="form-contact mb-3" name="name" id="name" placeholder="{{__('Nombre')}}" required maxlength="255" value="{{ old('name') }}">
    <input type="email" class="form-contact mb-3" name="email" id="email" placeholder="{{__('Correo')}}" required maxlength="255" value="{{ old('email') }}">
    <input type="number" class="form-contact mb-3" name="phone" id="phone" placeholder="{{__('Teléfono')}}" min="0" value="{{ old('phone') }}">
    <textarea class="form-contact mb-3" name="message" id="message" cols="30" rows="6" placeholder="{{__('Mensaje')}}" maxlength="255">{{ old('message') }}</textarea>

    <input type="hidden" name="url" value="{{ request()->fullUrl() }}">
    <input type="hidden" name="utm_campaign" value="{{ request()->query('utm_campaign') }}">

    <div class="row justify-content-center mt-4">
        <button type="submit" class="btn btn-orange rounded-0">{{__('Enviar')}}</button>
    </div>

</form>

@if (session('contact_message'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      gtag('event', 'generate_lead', {'currency': 'MXN', 'value': 1});
    });
  </script>
@endif
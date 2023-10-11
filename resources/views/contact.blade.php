@extends('shared.base')

@section('titles')
    <title>{{__('Contacto')}} - The One Residences Bucerías</title>
    <meta name="description" content="{{__('¿Estás buscando una nueva propiedad en la hermosa ciudad de Bucerías, Nayarit? ¡Tenemos justo lo que necesitas! Ya sea que estés buscando un lugar para llamar hogar o una inversión en bienes raíces, nuestro equipo de expertos está aquí para ayudarte. ¡No esperes más! Contáctanos hoy mismo y comienza a disfrutar de todo lo que Bucerías tiene para ofrecer.')}}">
@endsection

@section('content')

<div class="px-3 py-5 px-lg-5 py-lg-5 bg-dark text-white">
    <div class="container my-6">
        <div class="d-flex ff-oswald text-orange fs-5 pt-5 p-lg-0"><hr> {{__('Contacta un agente')}}</div>
        <h1>{{__('Contacto')}}</h1>    
    </div>
</div>

<div class="row justify-content-evenly my-6">

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">

        <div class="d-flex ff-oswald text-orange fs-5 mb-4"><hr> {{__('Contacto')}}</div>
        <h2 class="mb-4">{{__('Información de Contacto')}}</h2>       
        <p class="fs-5 mb-5">{{__('Contáctanos por cualquiera de los siguientes medios o a través de nuestro formulario de contacto y con gusto lo atenderemos.')}}</p>
        
        <a href="tel:+523221155040" class="d-block link-dark fs-5 mb-3 text-decoration-none">
            <i class="fa-solid fa-mobile-screen-button"></i> 
            +52 (322)-115-5040
        </a>

        <a href="mailto:info@domusvallarta.com" class="d-block link-dark fs-5 text-decoration-none">
            <i class="fa-regular fa-envelope"></i>
            info@domusvallarta.com
        </a>

    </div>
    
    <div class="col-12 col-lg-4">
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
    </div>

</div>

@endsection
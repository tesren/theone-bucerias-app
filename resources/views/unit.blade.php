@extends('shared.base')

@section('titles')
    <title>Condominio {{$unit->name}} - The One Residences</title>
    <meta name="description" content="Condominio con {{$unit->view->name_es}} en pre-venta en Bucerías Nayarit con {{$unit->bedrooms}} recámaras y {{$unit->bathrooms}} baños a solo 2 min caminando de la Playa.">

@endsection

@section('content')

    @php
        $portada = $unit->getFirstMedia('portrait');
    @endphp

    <div class="position-relative">
        <img src="@isset($portada){{ $portada->getUrl('large') }}@endisset" alt="Condominio {{$unit->name}}" class="w-100" style="height: 50vh; object-fit:cover;">
        <div class="fondo-oscuro"></div>
    </div>
@endsection
{{-- Botón de cambiar lenguaje --}}
@php
    $route = Route::currentRouteName();
@endphp

@if ( app()->getLocale() == 'es' )

    <a href="{{$url = route($route, [], true, 'en')}}" class="btn btn-orange fs-5 rounded-0 position-fixed bottom-0 start-0 ms-2" style="z-index: 10;">
        <i class="fa-solid fa-language"></i> EN
    </a>

@else

    <a href="{{$url = route($route, [], true, 'es')}}" class="btn btn-orange fs-5 rounded-0 position-fixed bottom-0 start-0 ms-2" style="z-index: 10;">
        <i class="fa-solid fa-language"></i> ES
    </a>

@endif
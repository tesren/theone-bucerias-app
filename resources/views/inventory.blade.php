@extends('shared.base')

@section('titles')
    <title>{{__('Condominios Disponibles')}} - The One Residences</title>
    <meta name="description" content="{{__('Inventario de Condominios disponibles en The One Residences Bucerías Nayarit, echa un vistazo a todo nuestro inventario y escoge el condominio de tus sueños.')}}">
@endsection

@section('content')

<div class="px-3 py-5 px-lg-5 py-lg-5 bg-dark text-white">
    <div class="container my-6">
        <div class="d-flex ff-oswald text-orange fs-5 pt-5 p-lg-0"><hr> {{__('Inventario')}}</div>
        <h1>{{__('Condominios Disponibles')}}</h1>    
    </div>
</div>


{{-- Menú de navegación --}}
<ul class="nav nav-pills mb-5 justify-content-center mt-6" id="pills-tab" role="tablist">
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

<div class="row justify-content-center">

    {{-- Vistas --}}
    <div class="col-12 col-lg-9 position-relative px-0">
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

                                <a href="{{route('unit', ['id'=>$unit->id] )}}" class="text-decoration-none position-relative">
                                    
                                    <polygon class="building-{{strtolower($unit->status)}}" points="{{ $unit->shape->points ?? '0,0'}}"></polygon>

                                    <text x="{{$unit->shape->text_x ?? 0;}}" 
                                        y="{{$unit->shape->text_y ?? 0; }}"
                                        font-size="40" font-weight="bold" fill="#fff" class="fw-light">
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

@endsection
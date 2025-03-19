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
    <div class="col-12 col-lg-9 col-xl-8 col-xxl-7 position-relative px-0">

        <div class="tab-content mb-6" id="pills-tabContent">
            @php $j = 1; @endphp
            @foreach ($views as $view)
    
                @if ($view->has_view == 1)
                    @php
                        $url = '/media/'.$view->img_path;
                    @endphp

                    <div class="tab-pane position-relative fade @if($j == 2) show active @endif" id="pills-{{$view->id}}" role="tabpanel" aria-labelledby="pills-{{$view->id}}-tab" tabindex="{{$j}}">
                        
                        <div class="svg-container">

                            <img src="@isset($url) {{asset($url)}} @endisset" alt="{{$view->name_es}}" class="w-100 rounded-3">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0" viewBox="{{$view->view_box}}">
                                @foreach ($view->units as $unit )

                                    <a href="{{route('unit', ['id'=>$unit->id, 'contact'=>request()->query('contact') ] )}}" class="text-decoration-none position-relative">
                                        
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

                        {{-- Simbología --}}
                        <ul class="position-absolute end-0 top-0 p-2 p-lg-4 list-unstyled bg-glass text-white">
                            <li class="fw-bold mb-1">{{__('Disponibilidad')}}</li>
                            <li><i class="fa-solid fa-square text-success"></i> {{__('Disponible')}}</li>
                            <li><i class="fa-solid fa-square text-warning"></i> {{__('Apartado')}}</li>
                            <li><i class="fa-solid fa-square text-danger"></i> {{__('Vendido')}}</li>
                        </ul>

                    </div>
                @else
                    <div class="tab-pane position-relative fade " id="pills-{{$view->id}}" role="tabpanel" aria-labelledby="pills-{{$view->id}}-tab" tabindex="{{$j}}">

                        <div class="row px-0">

                            @foreach ($view->units as $unit)
                                <div class="col-12 col-lg-4 mb-4">
                                    <div class="card w-100 border-0 position-relative">
                    
                                    @php
                                        $blueprint = '/media/'.$unit->blueprint_path;
                                    @endphp
                    
                                    <img src="@isset($blueprint){{ asset($blueprint) }}@endisset" class="card-img-top border-bottom" alt="Planos {{$unit->name}}" style="height: 300px; object-fit:contain;" loading="lazy">
                    
                                    <div class="badge bg-{{$unit->status}} position-absolute top-0 start-0">{{__($unit->status)}}</div>
                    
                                    <div class="card-body">
                                        <h4 class="card-title text-orange ff-oswald fs-6 mb-4">{{$unit->name}}</h4>
                                        <div class="fs-3">{{__('Estudio')}} - {{$unit->bathrooms}}BA - {{$unit->area}}m²</div>
                    
                                        @if (app()->getLocale() == 'en')
                                        <div class="fs-5 mb-4 text-orange">{{$unit->view->name_en}}</div>
                                        @else
                                        <div class="fs-5 mb-4 text-orange">{{$unit->view->name_es}}</div>
                                        @endif
                    
                                        <a href="{{route('unit', ['id'=> $unit->id, 'contact' => request()->query('contact') ])}}" class="btn btn-orange w-100">{{__('Más Info')}}</a>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
            
                        </div>
                    </div>
                    
                @endif
    
                @php $j++; @endphp
            @endforeach
        </div>

    </div>


</div>

@endsection
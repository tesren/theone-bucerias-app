@extends('shared.base')

@section('titles')
    <title>{{__('Avances de Obra')}} - The One Residences Bucerías</title>
    <meta name="description" content="{{__('Aquí podrás consultar el progreso de construcción de The One Residences Bucerías a través del tiempo.')}}">
@endsection

@section('content')
    
<div class="p-3 p-lg-5 bg-dark text-white">
    <div class="container my-6">
        <div class="d-flex ff-oswald text-orange fs-5"><hr> Construcción</div>
        <h1>Avances de Obra</h1>    
    </div>
</div>


<div class="row justify-content-center my-6">
    @foreach ($updates as $update)

        @php
            $portrait = '/media/'.$update->portrait_path;
            //$images = $update->getMedia('galleryc');
        @endphp

        <h3 class="fs-2 text-lightblue mb-3 text-center">{{__('Progreso de la construcción')}} - {{ __(date_format($update->date, 'F')); }} {{ date_format($update->date, 'Y'); }}</h3>
        @isset($update->description)
            @if (app()->getLocale() == 'es')
                <p class="fs-5 fw-light text-center text-white">{{$update->description}}</p>
            @else
                <p class="fs-5 fw-light text-center text-white">{{$update->description_en}}</p>         
            @endif
        @endisset

        <div class="col-11 col-lg-7 text-center mb-6 px-0 position-relative">
            <img class="w-100 rounded-2 shadow-6" src="{{$portrait}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" data-fancybox="gallery-{{$update->id}}" style="height: 65vh; object-fit:cover;" loading="lazy">
            <div class="blue-bg text-center d-flex justify-content-center">
                <a href="#gallery-{{$update->id}}-1" class="btn btn-blue align-self-center px-4" style="z-index: 20;"><i class="fa-regular fa-eye"></i> {{__('Ver')}}</a>
            </div>
        </div>

        {{-- @foreach ($images as $img)
            <img src="{{$img->getUrl('large')}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" class="d-none" data-fancybox="gallery-{{$update->id}}" loading="lazy">
        @endforeach --}}

    @endforeach
</div>

@endsection
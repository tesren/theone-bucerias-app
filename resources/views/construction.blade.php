@extends('shared.base')

@section('titles')
    <title>{{__('Avances de Obra')}} - The One Residences Bucerías</title>
    <meta name="description" content="{{__('Aquí podrás consultar el progreso de construcción de The One Residences Bucerías a través del tiempo.')}}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
@endsection

@section('content')
    
<div class="px-3 py-5 px-lg-5 py-lg-5 bg-dark text-white">
    <div class="container my-6">
        <div class="d-flex ff-oswald text-orange fs-5 pt-5 p-lg-0"><hr> {{__('Construcción')}}</div>
        <h1>{{__('Avances de Obra')}}</h1>
    </div>
</div>


<div class="row justify-content-center my-6">
    @foreach ($updates as $update)

        @php
            $portrait = '/media/'.$update->portrait_path;
            //$images = $update->getMedia('galleryc');
        @endphp

        <h3 class="fs-2 text-lightblue mb-3 text-center">{{__('Progreso de la construcción')}} - <span class="text-orange">{{ __(date_format($update->date, 'F')); }} {{ date_format($update->date, 'Y'); }}</span></h3>
        @isset($update->description)
            @if (app()->getLocale() == 'es')
                <p class="fs-5 fw-light text-center text-white">{{$update->description}}</p>
            @else
                <p class="fs-5 fw-light text-center text-white">{{$update->description_en}}</p>         
            @endif
        @endisset

        <div class="col-11 col-lg-7 text-center mb-6 px-0 position-relative">
            <img class="w-100 rounded-2 shadow-6" src="{{$portrait}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" style="height: 60vh; object-fit:cover;" loading="lazy">

            <div class="position-absolute top-0 start-0 w-100 h-100 text-center d-flex justify-content-center">
                <a href="{{$update->video_link}}" class="btn btn-orange align-self-center px-4 z-3" data-fancybox="video-{{$update->id}}">
                    <i class="fa-regular fa-eye"></i> {{__('Ver Video')}}
                </a>
            </div>
        </div>

        {{-- @foreach ($images as $img)
            <img src="{{$img->getUrl('large')}}" alt="{{__('Progreso de la obra')}} - {{ date_format($update->date, 'M Y'); }}" class="d-none" data-fancybox="gallery-{{$update->id}}" loading="lazy">
        @endforeach --}}

    @endforeach
</div>

@endsection

@section('javascript')
    <script src="{{asset('js/fancybox.umd.js')}}"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection
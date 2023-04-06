@extends('shared.base')

@section('titles')
    <title>{{__('Sobre Nosotros')}} - The One Residences  Bucerías</title>
    <meta name="description" content="{{__('The One Residences fue diseñado por comunArquitectura que es una oficina de arquitectura fundada en 2017 y cuenta con casi 30 años de experiencia, la oficina está enfocada a generar proyectos de manera profesional que respondan a las necesidades del cliente, siendo un generador de experiencias dentro de ese espacio, pensado para el usuario final.')}}">

@endsection

@section('content')

    <div class="position-relative mb-6">
        <img src="{{asset('/img/footer_background.webp')}}" class="w-100" style="height: 75vh; object-fit:cover;">
        <div class="fondo-oscuro"></div>

        <div class="position-absolute row justify-content-center h-100 z-3 top-0 start-0 text-white">
            <div class="col-11 col-lg-9 align-self-center">
                <div class="ff-oswald d-flex mb-4">
                    <hr class="text-white">
                    <div class="align-self-center fw-bold text-uppercase">{{__('Sobre Nosotros')}}</div>
                </div>
                <h1 class="fs-0 mb-5">comunArquitectura</h1>
                <p class="fs-5">{{__('The One Residences fue diseñado por comunArquitectura que es una oficina de arquitectura fundada en 2017 y cuenta con casi 30 años de experiencia, la oficina está enfocada a generar proyectos de manera profesional que respondan a las necesidades del cliente, siendo un generador de experiencias dentro de ese espacio, pensado para el usuario final.')}}</p>
            </div>
        </div>

    </div>

    <div class="row justify-content-evenly my-6">

        <div class="col-12 col-lg-4 mb-5 mb-lg-0">
            <img src="{{asset('img/about-img.webp')}}" alt="comunArquitectura" class="w-100">
        </div>

        <div class="col-12 col-lg-5 align-self-center">
            <div class="ff-oswald d-flex mb-3 mb-lg-5 text-orange">
                <hr>
                <div class="align-self-center fw-bold text-uppercase">{{__('Sobre Nosotros')}}</div>
            </div>
            <h2 class="fs-1 mb-4 mb-lg-5">{{__('Equipo Experimentado')}}</h2>
            <p>
                {{__('De igual forma podemos generar sinergia con otros despachos para colaborar en conjunto todos los servicios de arquitectura que correspondan a sus proyectos, desde el anteproyecto, proyecto ejecutivo, de interiores, con todas las especialidades o para obtener un proyecto integral.')}}
            </p>

            <p>
                {{__('Nuestros colaboradores son especialistas cada uno en el ramo que se les ha asignado, se ha colaborado con despachos de reconocimiento nacional e internacional como es Impulsora de Proyectos del Ara. Abraham Zabludovsky, Issac Broid Zajman en su momento Taller Cinco, Moyao Arquitectos del Ara, Arimatea Moyao, en diversos proyectos que van desde Espacios Deportivos, Centros Culturales, Centros de Convenciones, Centros Comerciales, Museos, Hoteles, Hospitales, Oficias, Edificios de Departamentos, Vivienda de Interes Social, Medio y Residencial, pasando por varias especialidades dentro de nuestra labor, como son, de Interiores, de Mobiliario, Urbanismo y Arquitectura del Paisaje.')}}
            </p>
        </div>

    </div>
    
@endsection
@extends('shared.base')

@section('titles')
    <title>Error 404 - The One Residences</title>
@endsection

@section('content')
<div class="text-center" style="min-height: 60vh;">
    <h1 class="mt-5 mb-4 text-dark">Error 404</h1>
    <p class="fs-5 mb-4 text-dark">{{__('Lo sentimos, la página que buscas no existe')}}</p>
    <a class="btn btn-blue mb-6" href="{{route('home')}}">{{__('Volver a Inicio')}}</a>
</div>
@endsection
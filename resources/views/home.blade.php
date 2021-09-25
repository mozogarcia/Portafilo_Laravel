@extends('layout')

@section('title', 'Home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4">PORTAFOLIO DE PROYECTOS</h1>
            <p class="lead text-secondary">Bienvenidos a este  sitio web de portafolios para tus nuevos proyectos!</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-16 col-lg-6">
            <img class="img-fluid mb-4" height="400px;" width="400px;" src="/img/inicio.png" alt="Desarrollo web">
        </div>
    </div>
</div>

@endsection
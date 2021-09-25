@extends('layout')

@section('title', 'about')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4">ACERCA DE MI</h1>
            <p class="lead text-secondary">Estudiante de Licenciatura en ciencias de la computacion en la Universidad Luterana Salvadoreña</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-8">
            <img class="img-fluid mb-4" src="/img/acerca.png" alt="Quien Soy">
        </div>
    </div>
</div>


@endsection
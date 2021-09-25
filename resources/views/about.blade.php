@extends('layout')

@section('title', 'about')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quien soy</h1>
            <p class="lead text-secondary">Soy un estudiante de la Universidad Luterana Salvadoreña,
                 en sexto ciclo de la carrera, me fascina la programacion 
                 y ver como con ella los problemas se pueden resolver.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/kiwi.png" alt="Quien Soy">
        </div>
    </div>
</div>


@endsection
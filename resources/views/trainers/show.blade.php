@extends('layouts.app')

@section('titulo', 'Trainer')

@section('content')

    <div class="jumbotron text-center">
        <img class="img-Entrenador-Perfil card-img-top" src="/images/{{$trainer->avatar}}" alt="Card image cap">
        <h1 class="display-4">{{ $trainer->name }}</h1>
        {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
        <hr class="my-4">
        <p>{{ $trainer->description }}</p>
        <a class="btn btn-warning btn-lg" href="/trainers" role="button">Regresar</a>
    </div>

@endsection
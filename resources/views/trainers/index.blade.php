@extends('layouts.app')

@section('titulo', 'Trainers')

@section('content')

<div class="row">
    @foreach($trainers as $trainer)
        <div class="col-sm">
            <div class="card text-center carta" style="width: 18rem;">
                {{-- <img style="height: 100px; width: 100px; border-radius: 100%;" class="card-img-top" src="images/{{$trainer->avatar}}" alt="Card image cap"> --}}
                <div text-center>
                    <img class="img-Entrenador card-img-top" src="images/{{$trainer->avatar}}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $trainer->name }}</h5>
                    <p class="card-text"> {{ $trainer->description }} </p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
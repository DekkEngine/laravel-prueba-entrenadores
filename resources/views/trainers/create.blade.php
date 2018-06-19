@extends('layouts.app')

@section('titulo', 'Trainers Create')

@section('content')

    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Ingresar Nombre">
        </div>
        <div class="form-group" >
            <label for="">Avatar</label>
            <br>
            <input type="file" name="avatar" class="input-group-text" >
        </div>
        <div class="form-group" >
            <label for="">Descripción</label>
            <br>
            <input type="text" name="description" class="form-control" placeholder="Ingresar Nombre">
            {{-- <textarea name="description" id="" cols="80" rows="10" class="form-control" placeholder="Ingrese descripción" ></textarea> --}}
        </div>
        <button type="submit" class="btn btn-outline-primary" >Guardar</button>
    </form> 

@endsection
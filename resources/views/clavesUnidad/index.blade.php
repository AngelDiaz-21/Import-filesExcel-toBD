@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Claves de unidad</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('clavesUnidad/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        {{-- Para mostrar la notification de agregado correctamente --}}
        {{-- Decimos que si tenemos una variable de sesion llamada notification vamos a mostrar su valor dentro del alert   --}}
        <div class="card-body">
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
        </div>
        <!-- specialities table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light align-items-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Clave de unidad</th>
                    <th scope="col">Nombre de unidad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Simbolo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clavesUnidad as $claveUni)
                <tr>
                    <th scope="row">{{ $claveUni->id_claveUnidad }}</th>
                    <th scope="row">{{ $claveUni->clave_Unidad }}</th>
                    <th scope="row">{{ $claveUni->nombreUnidad }}</th>
                    <th scope="row">{{ $claveUni->descripcion }}</th>
                    <th scope="row">{{ $claveUni->nota }}</th>
                    <th scope="row">{{ $claveUni->simbolo }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

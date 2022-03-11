@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Localidades de la república</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('localidad/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave de la localidad</th>
                    <th scope="col">Clave del estado</th>
                    <th scope="col">Nombre de la localidad</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui vamos a iterar. Para cada una de las especialidades (doctors) las vamos a tratar como doctor  -->
                @foreach ($localidades as $localidad)
                <tr>
                    <th scope="row">{{ $localidad->id_localidad }}</th>
                    <th scope="row">{{ $localidad->clave_Localidad }}</th>
                    <th scope="row">{{ $localidad->c_Estado }}</th>
                    <th scope="row">{{ $localidad->nombre_Localidad }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

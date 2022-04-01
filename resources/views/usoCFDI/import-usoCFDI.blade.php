@extends('layouts.panel')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importar datos de CFDI</div>

                <div class="card-body">
                    @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{$error}}
                        @endforeach
                    </div>
                    @endif

                    <form action="{{route('usoCFDI.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="import_file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="fileInput"/>

                        <button disabled="disabled" class="btn btn-primary" type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>{{ config('app.name') }} </title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }} " rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css?v=1.0.1') }}" rel="stylesheet"">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="/">
                <!-- TODO: Aqui va ir el codigo-->
                <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <!-- Se muestra para modo escritorio -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    @include('includes.panel.dropdown_menu')
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="{{ asset('img/brand/blue.png') }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Esta directiva pega un contenido que va a venir desde otra vista-->
                @include('includes.panel.menu')
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" style="min-height: 100vh; padding-bottom: 9em;">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/home">Importar datos</a>
                <!-- User -->
                <!-- Se muestra para modo movil -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src=" {{ asset('img/theme/bootstrap.jpg') }}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <!-- Con esto haremos que se muestre el nombre del usuario que haya iniciado sesión, primero accedemos a la información del usuario y con ello el nombre  -->
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        @include('includes.panel.dropdown_menu')
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-4 pt-md-6">
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            @yield('content')
            
        </div>
        <!-- Footer -->
        @include('includes.panel.footer')
    </div>
    
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }} "></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }} "></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }} "></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.0.0') }} "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>

<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/datosDomicilio.js')}}"></script>

</html>
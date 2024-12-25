<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Gestão</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">



    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('img/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('img/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('icon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('icon/safari-pinned-tab.svg') }}" color="#712cf9">
    <link rel="icon" href="{{ asset('icon/favicon.ico') }}">
    <meta name="theme-color" content="#712cf9">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>


    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">GESTÃO</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                    aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search"
                aria-label="Search">
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">


            @include('components.navegacao')


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('content')


        </div>
    </div>



    </main>
    </div>
    </div>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('js/color-modes.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}">
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js">
    </script> --}}
    {{-- <script src="{{ asset('js/dashboard.js') }}"></script> --}}

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

    <script src="{{ asset('js/projeto.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ivan">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Gestão</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"> --}}



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('icones/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('icones/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('icones/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('icones/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('icones/safari-pinned-tab.svg') }}" color="#712cf9">
    <link rel="icon" href="{{ asset('icones/favicon.ico') }}">
    <meta name="theme-color" content="#712cf9">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Custom styles for this template -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>

    @include('components.svg')


    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">GESTÂO</a>

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


                {{-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div> --}}



            </main>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
        integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/dashboard.js') }}"></script>

    <script src="{{ asset('js/color-modes.js') }}"></script>
</body>

</html>

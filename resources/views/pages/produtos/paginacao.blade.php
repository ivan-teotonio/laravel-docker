@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div>
        <form action="" method="get">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button>Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-end">Incluir Produto</a>
        </form>
    </div>

@endsection

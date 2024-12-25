@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div>
        <form action="{{ route('produto.index') }}" method="get">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('produto.criarProduto') }}" class="btn btn-success float-end">Incluir Produto</a>
        </form>


        <div class="table-responsive small mt-4">
            @if($findProdutos->isEmpty())
                <p>Nenhum produto encontrado</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProdutos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ 'R$ ' . number_format($produto->preco, 2, ',', '.') }}</td>
                                <td>
                                    <a href="" class="btn btn-light btn-sm">Editar</a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteResgisroPaginacao('{{ route('produto.delete', $produto->id) }}', {{ $produto->id }})" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
            @endif
        </div>



    </div>

@endsection

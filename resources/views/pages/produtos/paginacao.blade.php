@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="{{ route('produtos.index') }}" method="get" class="d-inline">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button type="submit">Pesquisar</button>
        </form><a href="{{ route('produtos.index') }}" type="button" class="btn btn-success float-end">Incluir Produto</a>


        <div class="table-responsive small mt-4">
            @if ($findProdutos->isEmpty())
                <p>Nenhum produto encontrado</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProdutos as $produto)
                            <tr>
                                <td class="align-middle">{{ $produto->nome }}</td>
                                <td class="align-middle">{{ 'R$ ' . number_format($produto->preco, 2, ',', '.') }}</td>
                                <td class="text-end align-middle">
                                    <a href="" type="button" class="btn btn-link text-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="" type="button" class="btn btn-link text-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>

@endsection

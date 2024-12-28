@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div>
        <form action="{{ route('vendas.index') }}" method="get">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('vendas.criarVenda') }}" class="btn btn-success float-end">Incluir Venda</a>
        </form>


        <div class="table-responsive small mt-4">
            @if($findVendas->isEmpty())
                <p>Nenhuma venda encontrada</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Número da Venda</th>
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findVendas as $venda)
                            <tr>
                                <td>{{ $venda->id }}</td>
                                <td>{{ $venda->numero_da_venda }}</td>
                                <td>{{ $venda->cliente->nome }}</td>
                                <td>{{ $venda->produto->nome }}</td>
                                <td>
                                    <a href="{{ route('vendas.enviarComprovanteEmail', $venda->id) }}" class="btn btn-light btn-sm">Enviar Email</a>
                                </td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
            </table>
            @endif
        </div>

parai na aula 85

    </div>

@endsection

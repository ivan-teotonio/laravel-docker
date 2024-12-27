@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div>
        <form action="{{ route('clientes.index') }}" method="get">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('clientes.criarCliente') }}" class="btn btn-success float-end">Incluir Cliente</a>
        </form>


        <div class="table-responsive small mt-4">
            @if($findCliente->isEmpty())
                <p>Nenhum cliente encontrado</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Endereço</th>
                            <th>Logradouro</th>
                            <th>CEP</th>
                            <th>Bairro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findCliente as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->logradouro }}</td>
                                <td>{{ $cliente->cep }}</td>
                                <td>{{ $cliente->bairro }}</td>
                                <td>
                                    <a href="{{ route('clientes.atualizarCliente', $cliente->id) }}" class="btn btn-light btn-sm">Editar</a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteResgisroPaginacao('{{ route('clientes.delete', $cliente->id) }}', {{ $cliente->id }})" class="btn btn-danger btn-sm">Excluir</a>
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

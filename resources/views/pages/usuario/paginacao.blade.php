@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div>
        <form action="{{ route('usuario.index') }}" method="get">
            @csrf
            <input type="text" name="pesquisar" placeholder="Pesquisar">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('usuario.criarUsuario') }}" class="btn btn-success float-end">Incluir Usuario</a>
        </form>


        <div class="table-responsive small mt-4">
            @if($findUsuario->isEmpty())
                <p>Nenhum usuario encontrado</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findUsuario as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a href="{{ route('usuario.atualizarUsuario', $usuario->id) }}" class="btn btn-light btn-sm">Editar</a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteResgisroPaginacao('{{ route('usuario.delete', $usuario->id) }}', {{ $usuario->id }})" class="btn btn-danger btn-sm">Excluir</a>
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

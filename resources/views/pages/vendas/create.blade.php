@extends('index')

@section('content')

<form class="row g-3" action="{{ route('vendas.criarVenda') }}" method="post">
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar nova Venda</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div class="col-12">
      <label  class="form-label">Numeração</label>
      <input
        type="text"
        name="numero_da_venda"
        class="form-control
        @error('numero_da_venda')
        is-invalid
        @enderror"
        value="{{ $findNumeracao }}"
        disabled
      >
      @if($errors->has('numero_da_venda'))
        <div class="invalid-feedback">
          {{ $errors->first('numero_da_venda') }}
        </div>
      @endif
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Produto</label>
        <select name="produto_id" class="form-control">
            <option value="">Selecione um produto</option>
            @foreach ($produtos as $produto)
                <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Cliente</label>
        <select name="cliente_id" class="form-control">
            <option value="">Selecione um cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
    </div>




    <div class="col-12">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </form>
@endsection

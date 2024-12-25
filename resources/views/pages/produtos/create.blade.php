@extends('index')

@section('content')

<form class="row g-3" action="{{ route('produto.criarProduto') }}" method="post">
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar novo Produto</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div class="col-12">
      <label  class="form-label">Nome</label>
      <input
        type="text"
        name="nome"
        class="form-control
        @error('nome')
        is-invalid
        @enderror"
      >
      @if($errors->has('nome'))
        <div class="invalid-feedback">
          {{ $errors->first('nome') }}
        </div>
      @endif
    </div>
    <div class="col-12">
      <label class="form-label">Valor</label>
      <input
        type="text"
        name="preco"
        class="form-control
        @error('preco')
        is-invalid
        @enderror"
      >
      @if($errors->has('preco'))
        <div class="invalid-feedback">
          {{ $errors->first('preco') }}
        </div>
      @endif
    </div>



    <div class="col-12">
      <button type="submit" class="btn btn-success">Cadstrar</button>
    </div>
  </form>
@endsection

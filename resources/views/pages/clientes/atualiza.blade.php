@extends('index')

@section('content')

<form class="row g-3" action="{{ route('clientes.atualizarCliente',$findCliente->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Cliente</h1>
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
        value="{{ isset($findCliente->nome) ? $findCliente->nome : old('nome') }}"
      >
      @if($errors->has('nome'))
        <div class="invalid-feedback">
          {{ $errors->first('nome') }}
        </div>
      @endif
    </div>

    <div class="col-12">
      <label class="form-label">E-mail</label>
      <input
        id="email"
        name="email"
        class="form-control
        @error('email')
        is-invalid
        @enderror"
        value="{{ isset($findCliente->email) ? $findCliente->email : old('email') }}"
      >
      @if($errors->has('email'))
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      @endif
    </div>

    <div class="col-12">
        <label class="form-label">Cep</label>
        <input
          id="cep"
          name="cep"
          class="form-control
          @error('cep')
          is-invalid
          @enderror"
          value="{{ isset($findCliente->cep) ? $findCliente->cep : old('cep') }}"
        >
        @if($errors->has('cep'))
          <div class="invalid-feedback">
            {{ $errors->first('cep') }}
          </div>
        @endif
    </div>

    <div class="col-12">
        <label class="form-label">Endereço</label>
        <input
          id="endereco"
          name="endereco"
          class="form-control
          @error('endereco')
          is-invalid
          @enderror"
          value="{{ isset($findCliente->endereco) ? $findCliente->endereco : old('endereco') }}"
        >
        @if($errors->has('endereco'))
          <div class="invalid-feedback">
            {{ $errors->first('endereco') }}
          </div>
        @endif
    </div>

    <div class="col-12">
        <label class="form-label">Logradouro</label>
        <input
          id="logradouro"
          name="logradouro"
          class="form-control
          @error('logradouro')
          is-invalid
          @enderror"
          value="{{ isset($findCliente->logradouro) ? $findCliente->logradouro : old('logradouro') }}"
        >
        @if($errors->has('logradouro'))
          <div class="invalid-feedback">
            {{ $errors->first('logradouro') }}
          </div>
        @endif
    </div>

    <div class="col-12">
        <label class="form-label">Bairro</label>
        <input
          id="bairro"
          name="bairro"
          class="form-control
          @error('bairro')
          is-invalid
          @enderror"
          value="{{ isset($findCliente->bairro) ? $findCliente->bairro : old('bairro') }}"
        >
        @if($errors->has('bairro'))
          <div class="invalid-feedback">
            {{ $errors->first('bairro') }}
          </div>
        @endif
    </div>





    <div class="col-12">
      <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </form>
@endsection

@extends('index')

@section('content')

<form class="row g-3" action="{{ route('usuario.criarUsuario') }}" method="post">
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Criar novo Usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
    </div>

    <div class="col-12">
      <label  class="form-label">Nome</label>
      <input
        type="text"
        name="name"
        class="form-control
        @error('name')
        is-invalid
        @enderror"
        value="{{ old('name') }}"
      >
      @if($errors->has('name'))
        <div class="invalid-feedback">
          {{ $errors->first('name') }}
        </div>
      @endif
    </div>

    <div class="col-12">
      <label class="form-label">Email</label>
      <input
        id="email"
        name="email"
        class="form-control
        @error('email')
        is-invalid
        @enderror"
        value="{{ old('email') }}"
      >
      @if($errors->has('email'))
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      @endif
    </div>

    <div class="col-12">
        <label class="form-label">Senha</label>
        <input
          id="password"
          name="password"
          class="form-control
          @error('password')
          is-invalid
          @enderror"
          value="{{ old('password') }}"
        >
        @if($errors->has('password'))
          <div class="invalid-feedback">
            {{ $errors->first('password') }}
          </div>
        @endif
      </div>



    <div class="col-12">
      <button type="submit" class="btn btn-success">Cadstrar</button>
    </div>
  </form>
@endsection

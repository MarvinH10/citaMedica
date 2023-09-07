@extends('layouts.panel')

@section('content')
  <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nueva promoción</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('/promociones') }}" class="btn btn-sm btn-success">
            <i class="fas fa-chevron-left"></i>
             Regresar
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Por favor!!</strong> {{ $error }}
            </div>
        @endforeach
      @endif

      <form action="{{ url('promociones') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Nombre de la promoción</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
          <label for="description">Descripción</label>
          <textarea rows="4" name="description" class="form-control" value="{{ old('description') }}"></textarea>
        </div>
        <div class="form-group">
          <label for="price">Precio</label>
          <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        </div>
        <button type="submit" class="btn btn-primary">
          Guardar
        </button>
      </form>
    </div>
  </div>
@endsection
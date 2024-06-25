@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Artículo</h1>
    <form action="{{ route('articulos.update', $articulo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" value="{{ $articulo->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="form-control" id="contenido" rows="5" required>{{ $articulo->contenido }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection

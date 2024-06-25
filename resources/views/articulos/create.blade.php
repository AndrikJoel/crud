@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Artículo</h1>
    <form action="{{ route('articulos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" required>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="form-control" id="contenido" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artículos</h1>
    <a href="{{ route('articulos.create') }}" class="btn btn-primary">Crear Artículo</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->titulo }}</td>
                <td>{{ $articulo->contenido }}</td>
                <td>
                    <a href="{{ route('articulos.show', $articulo->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

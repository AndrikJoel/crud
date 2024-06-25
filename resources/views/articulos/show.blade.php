@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $articulo->titulo }}</h1>
    <p>{{ $articulo->contenido }}</p>
    <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection

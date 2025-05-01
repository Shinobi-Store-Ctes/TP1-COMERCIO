@extends('layout.app')
@section('title', 'Panel de Administrador')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Panel de Administrador</h2>

    <div class="d-flex justify-content-center gap-2 my-4">
        <a href="{{ route('admin.section', ['seccion' => 'articulos']) }}" class="btn btn-primary">Artículos</a>
        <a href="{{ route('admin.section', ['seccion' => 'talles']) }}" class="btn btn-secondary">Talles</a>
        <a href="{{ route('admin.section', ['seccion' => 'categorias']) }}" class="btn btn-info">Categorías</a>
        <a href="{{ route('admin.section', ['seccion' => 'usuarios']) }}" class="btn btn-warning">Usuarios</a>
        <a href="{{ route('admin.section', ['seccion' => 'mensajes']) }}" class="btn btn-danger">Mensajes</a>
    </div>

    @yield('admin-section')
</div>
@endsection
@extends('layout.app')

@section('title', 'Gestión de Noticias')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Listado de Noticias</h2>

    <div class="text-end mb-3">
        <a href="{{ route('admin.noticias.create') }}" class="btn btn-success">Agregar Noticia</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->id }}</td>
                    <td>{{ $noticia->titulo }}</td>
                    <td>
                        @if ($noticia->imagen)
                        <img src="{{ asset('images/' . $noticia->foto) }}" alt="Imagen de noticia" width="100">
                        @else
                            <em>Sin imagen</em>
                        @endif
                    </td>
                    <td>{{ Str::limit(strip_tags($noticia->contenido), 100) }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.noticias.edit', $noticia->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('admin.noticias.destroy', $noticia->id) }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar esta noticia?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

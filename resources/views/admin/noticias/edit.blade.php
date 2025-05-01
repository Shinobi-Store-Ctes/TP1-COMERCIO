
{{-- resources/views/admin/noticias/edit.blade.php --}}
@extends('layout.app')

@section('title', 'Editar Noticia')

@section('content')
<div class="container mt-4">
    <h2>Editar Noticia</h2>
    <form action="{{ route('admin.noticias.update', $noticia->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $noticia->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea name="contenido" class="form-control" rows="5" required>{{ $noticia->contenido }}</textarea>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen (opcional)</label>
            <input type="file" name="imagen" class="form-control">
            @if ($noticia->imagen)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="Imagen actual" style="max-width: 200px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="{{ route('admin.noticias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

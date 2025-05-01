@extends('admin.index')

@section('admin-section')
<div class="container mt-4">
    <h3 class="mt-4">Listado de Categorías</h3>
    <div class="modal-footer d-flex justify-content-center mt-4">
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarCategoriaModal">Agregar Categoría</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered mt-2 equal-width-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->categoria_id }}</td>
                    <td>{{ $categoria->categoria }}</td>
                    <td class="d-flex justify-content-center gap-3">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarCategoriaModal{{ $categoria->categoria_id }}">Editar</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarCategoriaModal{{ $categoria->categoria_id }}">Eliminar</button>
                    </td>
                </tr>
                @include('partials.categoria.editar-modal', ['categoria' => $categoria])
                @include('partials.categoria.eliminar-modal', ['categoria' => $categoria])
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.categoria.agregar-modal')
</div>
@endsection

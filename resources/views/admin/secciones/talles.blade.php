@extends('admin.index')

@section('admin-section')
<div class="container mt-4">
    <h3 class="mt-4">Listado de Talles</h3>
    <div class="modal-footer d-flex justify-content-center mt-4">
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarTalleModal">Agregar Talle</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered mt-2 equal-width-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Talle</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($talles as $talle)
                <tr>
                    <td>{{ $talle->talle_id }}</td>
                    <td>{{ $talle->talle }}</td>
                    <td class="d-flex justify-content-center gap-3">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarTalleModal{{ $talle->talle_id }}">Editar</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarTalleModal{{ $talle->talle_id }}">Eliminar</button>
                    </td>
                </tr>
                @include('partials.talle.editar-modal', ['talle' => $talle])
                @include('partials.talle.eliminar-modal', ['talle' => $talle])
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.talle.agregar-modal')
</div>
@endsection
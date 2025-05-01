@extends('admin.index')

@section('admin-section')
<div class="container mt-4">
    <h3 class="mt-4">Listado de Artículos</h3>
    <div class="modal-footer d-flex justify-content-center mt-4">
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarProductoModal">Agregar Producto</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-2 equal-width-table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>Talle</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->articulo_id }}</td>
                    <td>
                        @if (!empty($articulo->imagen))
                            <img src="{{ asset('images/productos/' . $articulo->imagen) }}" alt="Imagen de {{ $articulo->nombre }}" class="img-thumbnail mx-auto d-block" style="width: 100px; height: auto;">
                        @else
                            <span>Sin imagen</span>
                        @endif
                    </td>
                    <td>{{ $articulo->nombre }}</td>
                    <td class="card-price">${{ number_format($articulo->precio, 2) }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->categorias->categoria ?? 'N/A' }}</td>
                    <td>{{ $articulo->talles->talle ?? 'N/A' }}</td>
                    <td class="d-flex justify-content-center gap-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productoModal{{ $articulo->articulo_id }}">Ver</button>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal{{ $articulo->articulo_id }}">Editar</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal{{ $articulo->articulo_id }}">Eliminar</button>
                    </td>
                </tr>
                @include('partials.producto.ver-modal', ['articulo' => $articulo])
                @include('partials.producto.editar-modal', ['articulo' => $articulo])
                @include('partials.producto.eliminar-modal', ['articulo' => $articulo])
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.producto.agregar-modal')
</div>
@endsection
<!-- Modal Ver Producto -->
<div class="modal fade" id="productoModal{{ $articulo->articulo_id }}" tabindex="-1" aria-labelledby="verModalLabel{{ $articulo->articulo_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="verModalLabel{{ $articulo->articulo_id }}">Detalles del Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 text-center">
                        @if ($articulo->imagen)
                            <img src="{{ asset('images/' . $articulo->imagen) }}" class="img-fluid mb-3" alt="{{ $articulo->nombre }}">
                        @else
                            <p>Sin imagen</p>
                        @endif
                        @if ($articulo->imagen_hover)
                            <img src="{{ asset('images/' . $articulo->imagen_hover) }}" class="img-fluid" alt="{{ $articulo->nombre }} (hover)">
                        @endif
                    </div>
                    <div class="col-md-7">
                        {{-- <p><strong>ID:</strong> {{ $articulo->articulo_id }}</p> --}}
                        <p><strong>Nombre:</strong> {{ $articulo->nombre }}</p>
                        <p><strong>Descripción:</strong> {{ $articulo->descripcion ?? 'Sin descripción' }}</p>
                        <p><strong>Precio:</strong> ${{ number_format($articulo->precio, 2) }}</p>
                        <p><strong>Categoría:</strong> {{ $articulo->categorias->categoria ?? 'N/A' }}</p>
                        <p><strong>Talle:</strong> {{ $articulo->talles->talle ?? 'N/A' }}</p>
                        <p><strong>Cantidad:</strong> {{ $articulo->cantidad }}</p>
                        <p><strong>Fecha de creación:</strong> {{ $articulo->fecha_creacion ?? 'N/A' }}</p>
                        <p><strong>Última actualización:</strong> {{ $articulo->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

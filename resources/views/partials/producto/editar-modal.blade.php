<?php
/**
 * Panel de Administrador
 * Modal para Editar Producto
 *
 * @var \App\Models\Articulos $articulo
 */
?>
<!-- Modal Editar Producto -->
<div class="modal fade" id="editarModal{{ $articulo->articulo_id }}" tabindex="-1" aria-labelledby="editarModalLabel{{ $articulo->articulo_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('articulos.update', $articulo->articulo_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editarModalLabel{{ $articulo->articulo_id }}">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre{{ $articulo->articulo_id }}" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre{{ $articulo->articulo_id }}" class="form-control" value="{{ $articulo->nombre }}" required>
                        </div>
                        <div class="col">
                            <label for="precio{{ $articulo->articulo_id }}" class="form-label">Precio</label>
                            <input type="number" name="precio" id="precio{{ $articulo->articulo_id }}" class="form-control" step="0.01" value="{{ $articulo->precio }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion{{ $articulo->articulo_id }}" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion{{ $articulo->articulo_id }}" class="form-control" rows="3">{{ $articulo->descripcion }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="talle_id" class="form-label">Talle</label>
                            <select class="form-select" id="talle_id" name="talle_id">
                                @foreach($talles as $talle)
                                    <option value="{{ $talle->talle_id }}" {{ $articulo->talle_id == $talle->talle_id ? 'selected' : '' }}>
                                        {{ $talle->talle }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="categoria_id" class="form-label">Categoría</label>
                            <select class="form-select" id="categoria_id" name="categoria_id">
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->categoria_id }}" {{ $articulo->categoria_id == $categoria->categoria_id ? 'selected' : '' }}>
                                        {{ $categoria->categoria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="cantidad{{ $articulo->articulo_id }}" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad{{ $articulo->articulo_id }}" class="form-control" value="{{ $articulo->cantidad }}" required>
                        </div>
                        <div class="col">
                            <label for="fecha_creacion{{ $articulo->articulo_id }}" class="form-label">Fecha de creación</label>
                            <input type="date" name="fecha_creacion" id="fecha_creacion{{ $articulo->articulo_id }}" class="form-control" value="{{ $articulo->fecha_creacion }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="imagen{{ $articulo->articulo_id }}" class="form-label">Imagen</label>
                        <input type="file" name="imagen" id="imagen{{ $articulo->articulo_id }}" class="form-control">
                        @if ($articulo->imagen)
                            <small class="text-muted">Actual: {{ $articulo->imagen }}</small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="imagen_hover{{ $articulo->articulo_id }}" class="form-label">Imagen Hover</label>
                        <input type="file" name="imagen_hover" id="imagen_hover{{ $articulo->articulo_id }}" class="form-control">
                        @if ($articulo->imagen_hover)
                            <small class="text-muted">Actual: {{ $articulo->imagen_hover }}</small>
                        @endif
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

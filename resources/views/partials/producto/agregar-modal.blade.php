<!-- Modal Agregar Producto -->
<div class="modal fade" id="agregarProductoModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('articulos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="agregarModalLabel">Agregar Nuevo Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="talle_id" class="form-label">Talle</label>
                            <select name="talle_id" id="talle_id" class="form-select" required>
                                <option value="" disabled selected>Seleccioná un talle</option>
                                @foreach ($talles as $talle)
                                    <option value="{{ $talle->talle_id }}">{{ $talle->talle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="categoria_id" class="form-label">Categoría</label>
                            <select name="categoria_id" id="categoria_id" class="form-select" required>
                                <option value="" disabled selected>Seleccioná una categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->categoria_id }}">{{ $categoria->categoria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="fecha_creacion" class="form-label">Fecha de creación</label>
                            <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="imagen_hover" class="form-label">Imagen Hover</label>
                        <input type="file" name="imagen_hover" id="imagen_hover" class="form-control" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

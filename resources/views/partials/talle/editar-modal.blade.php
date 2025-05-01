<!-- Modal Editar Talle -->
<div class="modal fade" id="editarTalleModal{{ $talle->talle_id }}" tabindex="-1" aria-labelledby="editarModalLabel{{ $talle->talle_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('talles.update', $talle->talle_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editarModalLabel{{ $talle->talle_id }}">Editar Talle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <p class="text-muted">Nombre actual: <strong>{{ $talle->talle }}</strong></p>
                            <label for="nombre{{ $talle->talle_id }}" class="form-label">Nombre</label>
                            <input type="text" name="talle" id="talle{{ $talle->talle_id }}" class="form-control" value="{{ $talle->talle }}" required>
                        </div>
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

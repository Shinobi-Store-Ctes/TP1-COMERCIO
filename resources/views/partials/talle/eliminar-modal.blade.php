<!-- Modal Eliminar Talle -->
<div class="modal fade" id="eliminarTalleModal{{ $talle->talle_id }}" tabindex="-1" aria-labelledby="eliminarModalLabel{{ $talle->talle_id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="eliminarModalLabel{{ $talle->talle_id }}">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar el talle <strong>{{ $talle->talle }}</strong>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('talles.destroy', $talle->talle_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

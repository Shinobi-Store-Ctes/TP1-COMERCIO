<!-- Modal Eliminar Categoría -->
<div class="modal fade" id="eliminarCategoriaModal{{ $categoria->categoria_id }}" tabindex="-1" aria-labelledby="eliminarCategoriaModalLabel{{ $categoria->categoria_id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="eliminarCategoriaModalLabel{{ $categoria->categoria_id }}">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar la categoría <strong>{{ $categoria->categoria }}</strong>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('categorias.destroy', $categoria->categoria_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-delete" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modal-deleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-deleteLabel">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    @csrf
                </form>

                <h5 id="modal-text-body">
                    ¿Estas seguro que deseas eliminar el recurso?
                </h5>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
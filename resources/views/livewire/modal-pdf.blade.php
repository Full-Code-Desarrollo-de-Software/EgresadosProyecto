<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <!-- Modal -->
    <div class="modal fade" id="modal-pdf" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Genarar Reporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        @foreach ($this->preguntas as $pregunta)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="pregunta-{{ $pregunta->id }}"
                                    value="{{ $pregunta->id }}" name="preguntasCheck">
                                <label class="custom-control-label" for="pregunta-{{ $pregunta->id }}">
                                    <em>({{ $pregunta->pregunta }})</em>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" onclick="generatePDF()" class="btn btn-primary">Genarar PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 col-md-6">
                <div class="card shadow">
                    <div class="card-header" style="background-color: #18396a;">
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="col-md-3">
                                <div class="d-flex mb-2">
                                    <p class="mb-0">Consulta:</p>
                                    <input name="busqueda" wire:model.debounce.500ms="search"
                                        class="form-control py-0 ml-2 form-control-sidebar" type="search"
                                        placeholder="Buscar" aria-label="Search">
                                </div>
                                <div class="d-flex mt-4">
                                    {{-- <center>
                                        <button class="btn btn-danger">Generar Reporte PDF</button>
                                    </center> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex  mb-2">
                                    <span class="mr-2">
                                        Categoria:
                                    </span>
                                    <select name="category" wire:model="categoria" class="form-control">
                                        <option value="0">Todas</option>
                                        @foreach ($this->categorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->id }}
                                                -
                                                {{ $categoria->categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($abierto)
                                    <div class="d-flex mb-2">
                                        <span class="mr-4">
                                            Preguntas:
                                        </span>
                                        <select name="question" wire:model="pregunta" class="form-control">
                                            <option value="0">Todos</option>
                                            @foreach ($this->preguntas as $pregunta)
                                                <option value="{{ $pregunta->id }}">{{ $pregunta->id }} -
                                                    {{ $pregunta->pregunta }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <select name="year" wire:model="año" class="form-control p-0 mx-2">
                                        <option value="">Todos</option>
                                        @for ($i = now()->year; $i >= 2020; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="custom-control custom-switch ml-2 mt-2">
                                    <input wire:click="setLabels" type="checkbox" class="custom-control-input info"
                                        id="customSwitch1">
                                    <label class="custom-control-label font-weight-light" for="customSwitch1">Mostrar
                                        etiquetas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($abierto)
                <div class="col-lg-8 col-md-6">
                    <div class="card shadow">
                        <div class="card-header" style="background-color: #18396a;">
                            <h3 class="card-title">
                            </h3>
                        </div>
                        <div class="card-body" style="height: 500px">
                            <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                                :column-chart-model="$columnChartModel" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow">
                        <div class="card-header" style="background-color: #18396a;">
                            <h3 class="card-title">
                            </h3>
                        </div>
                        <div class="card-body" style="height: 500px">
                            <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                                :pie-chart-model="$pieChartModel" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="card shadow">
                        <div class="card-header" style="background-color: #18396a;">
                            <h3 class="card-title">
                            </h3>
                        </div>
                        <div class="card-body" style="height: 500px">
                            <livewire:livewire-area-chart key="{{ $areaChartModel->reactiveKey() }}"
                                :area-chart-model="$areaChartModel" />
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
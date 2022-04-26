@extends('adminlte::page')

@section('title', 'Editar Preguntas')

@section('content_header')
    <h1>Editar Preguntas</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Pregunta</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.preguntas.update', $pregunta->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="pregunta">Pregunta</label>
                                {{ Form::text('pregunta', $pregunta->pregunta, ['class' => $errors->first('pregunta') ? 'form-control is-invalid' : 'form-control']) }}
                                @error('pregunta')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pregunta">Categoria De la pregunta</label>
                                <select class="form-control" name="pregunta">
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>                                  
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary m3-2" type="submit">Editar Pregunta</button>
                                <a class="btn btn-danger ml-2" href="{{ route('admin.preguntas.index') }}">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')

@stop
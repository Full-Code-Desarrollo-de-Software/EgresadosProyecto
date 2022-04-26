@extends('adminlte::page')

@section('title', 'Crear Preguntas')

@section('content_header')
    <h1>Crear Preguntas</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Crear Nueva Pregunta</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.preguntas.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="pregunta">Pregunta</label>
                                {{ Form::text('pregunta', '', ['class' => $errors->first('pregunta') ? 'form-control is-invalid' : 'form-control']) }}
                                @error('pregunta')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="categoria_id">Categoria De la pregunta</label>
                                <select class="form-control" name="categoria_id">
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>                                  
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary m3-2" type="submit">Crear Pregunta</button>
                                <a class="btn btn-danger ml-2"
                                    href="{{ route('admin.preguntas.index') }}">Regresar</a>
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
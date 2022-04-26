@extends('adminlte::page')

@section('title', 'Editar Categorias')

@section('content_header')
    <h1>Editar Categorias</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Categoria</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categorias.update', $categoria->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="categoria">Nombre de la categoria</label>
                                {{ Form::text('categoria', $categoria->categoria, ['class' => $errors->first('categoria') ? 'form-control is-invalid' : 'form-control']) }}
                                @error('categoria')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary m3-2" type="submit">Editar Categoria</button>
                                <a class="btn btn-danger ml-2" href="{{ route('admin.categorias.index') }}">Regresar</a>
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
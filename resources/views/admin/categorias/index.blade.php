@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2>Tabla de Categorias</h2>
                    <a href="{{route('admin.categoria.create')}}">Carear Categoria</a>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
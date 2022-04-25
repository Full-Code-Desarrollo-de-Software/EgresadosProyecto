@extends('adminlte::page')

@section('title', 'Graficas')

@section('content_header')
    <h1>Graficas</h1>
@stop

@section('content')
    @livewire('charts')
    @livewire('modal-pdf')
    <center>
        <button class="btn btn-danger" type="button" onclick="openModal()">Generar Reporte PDF</button>
    </center>  
@stop

@section('css')
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->
    @livewireChartsScripts
    <script>
        function openModal() {
            $('#modal-pdf').modal('show')
        }

        function generatePDF() {
            var favorite=[];
            $.each($("input[name='preguntasCheck']:checked"), function(){
                favorite.push($(this).val());
            });
            console.log(favorite);
            $('#modal-pdf').modal('hide');
            Livewire.emitTo('modal-pdf','generatePDF',favorite)
        }
    </script>

@stop
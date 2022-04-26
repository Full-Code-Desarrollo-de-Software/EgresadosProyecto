@extends('adminlte::page')

@section('title', 'preguntas')

@section('content_header')
    <h1>Preguntas</h1>
@stop

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="card-customize">
                <div class="card-header ">
                    <h2>Tabla de Preguntas</h2>
                    <a class="btn btn-primary float-right" href="{{ route('admin.preguntas.create') }}">Crear
                        Pregunta</a>
                </div>
                <div class="card-body">
                    <table id="tabla-preguntas" class="table table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Pregunta</th>
                            <th>Respuestas</th>
                            <th>Acciones</th>
                        </thead>
                    </table>
                </div>
            </div>
            <br>
        </div>
    </div>
    @include('partials.modal-delete')
@stop

@section('css')
    @include('partials.style-card-customize')
@stop

@section('js')
@include('sweetalert::alert')
    <script>
        //PARA EL INDEX Y CARGAR LA TABLA
        $(document).ready(function() { //se eejcuta al inicio
            var tablaPreguntas = $('#tabla-preguntas').DataTable({ //inicializa la tabla
                searchDelay: 1000,
                porcessing: true,
                serverSide: true,
                responsive: true,
                autoWidth: false,
                scrollX: true,
                scrollCollapse: true,
                ajax: { //la peticion ajax mandara al servidor y el servidor da como respuesta las $preguntas y los botones
                    url: "{{ route('admin.preguntas.index', $id) }}",
                },
                columns: [ //pone los datos en cada  columna x cada pregunta (raw)
                    {
                        data: 'id'
                    },
                    {
                        data: 'pregunta'
                    },
                    {
                        data: 'preguntas'
                    },
                    {
                        data: 'acciones',
                        orderable: false
                    },
                ]
            });
        });
    </script>
    <script>
        //PARA ELIMINAR
        var ani_id;
        $(document).on('click', '.delete',
            function() { // despues de dar click en el btn elimar (.delete es por el class="delete")
                ani_id = $(this).attr('id'); //recuperamos el id del boton delte que se presiono
                $('#modal-delete').modal('show'); //lanzamos el modal de confirmacion
            }); //Aqui .delete es el name del boton

        $('#btnEliminar').click(function() { //si enseguida se presiona el btn eliminar

            $.ajax({ //Mando la peticion ajax
                url: "preguntas/eliminar/" + ani_id,
                beforeSend: function() { //funcion para que el boton aparezca eliminando
                    $('#btnEliminar').text('Eliminado...');
                },
                success: function(data) { //Mandamos la data
                    setTimeout(function() { //damos un tiempo de espera despues de la peticon ajax
                        $('#modal-delete').modal(
                            'hide'); //esconde el modal despues de hacer la eliminacion
                        //PAra mostrar mensaje de toast
                        Swal.fire(
                            'Correcto!',
                            'Se ha eliminado la pregunta!',
                            'success'
                        )
                        $('#tabla-preguntas').DataTable().ajax
                            .reload(); //Cuando se elimine el animal que se actualice la tabla
                    }, 1000); // 2 segundos de eliminacion
                    $('#btnEliminar').text('Eliminar');
                },
            });
        });
    </script>
@stop
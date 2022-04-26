@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="card-customize">
                <div class="card-header ">
                    <h2>Tabla de Categorias</h2>
                    <a class="btn btn-primary float-right" href="{{ route('admin.categorias.create') }}">Crear
                        Categoria</a>
                </div>
                <div class="card-body">
                    <table id="tabla-categorias" class="table table-bordered table-hover prueba">
                        <thead>
                            <th>ID</th>
                            <th style="width: 50%">Categoria</th>
                            <th>Preguntas</th>
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
            var tablaCategoria = $('#tabla-categorias').DataTable({ //inicializa la tabla
                searchDelay: 1000,
                porcessing: true,
                serverSide: true,
                responsive: true,
                autoWidth: true,
                scrollX: true,
                scrollCollapse: true,
                ajax: { //la peticion ajax mandara al servidor y el servidor da como respuesta los $categoriases y los botones
                    url: "{{ route('admin.categorias.index') }}",
                },
                columns: [ //pone los datos en cada  columna x cada categoriasl (raw)
                    {
                        data: 'id'
                    },
                    {
                        data: 'categoria'
                    },
                    {
                        data: 'preguntas',
                        orderable: false
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
                url: "categorias/eliminar/" + ani_id,
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
                            'Se ha eliminado la categoria!',
                            'success'
                        )
                        $('#tabla-categorias').DataTable().ajax
                            .reload(); //Cuando se elimine el animal que se actualice la tabla
                    }, 1000); // 2 segundos de eliminacion
                    $('#btnEliminar').text('Eliminar');
                },
            });
        });
    </script>
@stop
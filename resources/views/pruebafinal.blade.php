<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Prueba Encuesta</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form action="{{ route('guardar') }}" method="POST">
                    @csrf
                    @foreach ($preguntas as $pregunta)
                        {{ $pregunta->id }} - {{ $pregunta->pregunta }} <br>

                        @foreach ($pregunta->respuestas as $respuesta)
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="radio" name="pregunta{{ $pregunta->id }}"
                                    id="flexRadioDefault{{ $respuesta->id }}" value="{{$respuesta->id}}">
                                <label class="form-check-label" for="flexRadioDefault{{ $respuesta->id }}">
                                    {{ $respuesta->respuesta }}
                                </label>
                            </div>
                        @endforeach


                        @foreach ($pregunta->subpreguntas as $subpregunta)
                            &nbsp;  &nbsp; &nbsp; &nbsp;{{ $subpregunta->id }}- {{ $subpregunta->pregunta }} <br>
                            <div class="ms-5">
                                @foreach ($subpregunta->respuestas as $respuesta)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="pregunta{{ $respuesta->id }}"
                                        id="flexRadioDefault{{ $respuesta->id }}" value="{{$respuesta->id}}">
                                        <label class="form-check-label" for="flexRadioDefault{{ $respuesta->id }}">
                                        {{ $respuesta->respuesta }}
                                    </label>
                                </div>
                            @endforeach
                            </div>
                        @endforeach
                    @endforeach
                    <button type="submit" class="btn btn-info" >Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

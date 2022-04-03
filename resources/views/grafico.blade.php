<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <canvas id="myChart1"></canvas>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let respuestas = {{ Js::from($respuestas) }};
        let pregunta = {{ Js::from($preguntaEncontrada) }};
        //let arrayColores = respuestas.map(respuesta => '#' + Math.random().toString(16).slice(2, 8))
        const data = {
            labels: respuestas.map(respuesta => respuesta.respuesta),
            datasets: [{
                label: pregunta,
                backgroundColor: ['#18396a', '#343a40'],
                borderColor: ['#18396a', '#343a40'],
                data: respuestas.map(respuesta => respuesta.total),
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };
    </script>
    <script>
        const myChart1 = new Chart(
            document.getElementById('myChart1'),
            config
        );
    </script>
</body>

</html>
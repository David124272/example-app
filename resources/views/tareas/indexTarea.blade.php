<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>

<body>
    <h1>Listado de tareas</h1>

    <table border="2">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha límite</th>
                <th>Tipo</th>
                <th>Prioridad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td> {{$tarea->titulo}} </td>
                <td> {{$tarea->descripcion}} </td>
                <td> {{$tarea->fecha_limite}} </td>
                <td> {{$tarea->tipo}} </td>
                <td> {{$tarea->prioridad}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
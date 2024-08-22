<?php
// Recolectar los datos del formulario
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$director = isset($_POST['director']) ? $_POST['director'] : '';
$produccion = isset($_POST['produccion']) ? $_POST['produccion'] : '';
$nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : '';
$duracion = isset($_POST['duracion']) ? $_POST['duracion'] : '';
$actores = isset($_POST['actores']) ? $_POST['actores'] : '';
$guion = isset($_POST['guion']) ? $_POST['guion'] : '';
$anio = isset($_POST['anio']) ? $_POST['anio'] : '';
$genero = isset($_POST['genero']) ? $_POST['genero'] : '';
$restricciones = isset($_POST['restricciones']) ? $_POST['restricciones'] : '';
$sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : '';

// Mostrar los datos en la página
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Película Introducida</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #e0f7da; /*Verde Claro*/
            padding: 20px;
            max-width: 800px;
            width: 100%;
        }
        h1 {
            text-align: left;
            color:#288ef5;
        }
        ul {
            list-style-type: none;
            padding: 0;
            color: #2e7d32; /* Verde oscuro */
        }
        .list-group-item{
        background-color: #e0f7da; /*Verde Claro*/
        border: none;
        }
        .salir, .salir:hover{
            display: flex;
            justify-content: right;
            align-items: right;
            color: grey;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class='container mt-5'>
    <a href='../Ejercicio4Cine.html' class='salir'>X</a>
        <h1 class='text-left'>La película introducida es:</h1>
        <ul class='list-group mt-4'>
            <li class='list-group-item'><strong>Título:</strong> $titulo</li>
            <li class='list-group-item'><strong>Director:</strong> $director</li>
            <li class='list-group-item'><strong>Producción:</strong> $produccion</li>
            <li class='list-group-item'><strong>Nacionalidad:</strong> $nacionalidad</li>
            <li class='list-group-item'><strong>Duración:</strong> $duracion minutos</li>
            <li class='list-group-item'><strong>Actores:</strong> $actores</li>
            <li class='list-group-item'><strong>Guion:</strong> $guion</li>
            <li class='list-group-item'><strong>Año:</strong> $anio</li>
            <li class='list-group-item'><strong>Género:</strong> $genero</li>
            <li class='list-group-item'><strong>Restricciones de edad:</strong> $restricciones</li>
            <li class='list-group-item'><strong>Sinopsis:</strong> $sinopsis</li>
        </ul>
    </div>
</body>
</html>";
?>

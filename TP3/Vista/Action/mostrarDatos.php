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

// Ruta del directorio para subir imágenes
$directorio = "../../uploads/";

// Inicializar variable de imagen
$imagen = "";

// Verificar si se ha subido una imagen
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $imageFileType = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));
    $target_file = $directorio . basename($_FILES['imagen']['name']);

    // Verificar el tipo de archivo
    if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png" || $imageFileType == "gif") {
        // Mover el archivo subido al directorio especificado
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
            $imagen = $target_file;
        } else {
            echo "Error: No se pudo subir el archivo.";
            exit;
        }
    } else {
        echo "Error: Solo se permiten imágenes (JPG, JPEG, PNG, GIF).";
        exit;
    }
} else {
    echo "Error: No se ha recibido ningún archivo o ha ocurrido un error al subirlo.";
    exit;
}

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

        h2 {
            text-align: left;
            color:#288ef5;
        }
        ul {
            list-style-type: none;
            padding: 0;
            color: #2e7d32; /* Verde oscuro */
            font-weight: bold
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
        .container {
            display: flex; /* Habilita flexbox */
            flex-direction: column; /* Alinea los elementos en una columna */
            align-items: center; /* Centra los elementos horizontalmente */
            justify-content: center; /* Centra los elementos verticalmente */
            background-color: #e0f7da; 
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
        }

        .img-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 60%; /* Asegura que la imagen no exceda el ancho del contenedor */
            height: auto; /* Mantiene la relación de aspecto de la imagen */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra sutil */
            margin: 20px 0; /* Añade un margen vertical para separar la imagen del texto */
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>La película introducida es:</h2>
        <ul class='list-group'>
            <li class='list-group-item'>Título: $titulo</li>
            <li class='list-group-item'>Director: $director</li>
            <li class='list-group-item'>Producción: $produccion</li>
            <li class='list-group-item'>Nacionalidad: $nacionalidad</li>
            <li class='list-group-item'>Duración: $duracion minutos</li>
            <li class='list-group-item'>Actores: $actores</li>
            <li class='list-group-item'>Guion: $guion</li>
            <li class='list-group-item'>Año: $anio</li>
            <li class='list-group-item'>Género: $genero</li>
            <li class='list-group-item'>Restricciones: $restricciones</li>
            <li class='list-group-item'>Sinopsis: $sinopsis</li>
            <li class='list-group-item'>Imagen: <img src='$imagen' alt='Imagen de la película' class='img-fluid'></li>
        </ul>
    </div>
</body>
</html>";

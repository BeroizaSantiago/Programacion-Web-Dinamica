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
    $imageFileType = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION)); //obtiene unicamente la extensión del archivo y lo pasa a minuscula
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
?>
<!DOCTYPE html>
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
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
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
            max-width: 60%;
            height: auto; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            margin: 20px 0; 
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>La película introducida es:</h2>
        <ul class='list-group'>
            <li class='list-group-item'>Título: <?php echo $titulo?></li>
            <li class='list-group-item'>Director: <?php echo $director?></li>
            <li class='list-group-item'>Producción: <?php echo $produccion?></li>
            <li class='list-group-item'>Nacionalidad: <?php echo $nacionalidad?></li>
            <li class='list-group-item'>Duración: <?php echo $duracion?> minutos</li>
            <li class='list-group-item'>Actores: <?php echo $actores?></li>
            <li class='list-group-item'>Guion: <?php echo $guion?></li>
            <li class='list-group-item'>Año: <?php echo $anio?></li>
            <li class='list-group-item'>Género: <?php echo $genero?></li>
            <li class='list-group-item'>Restricciones: <?php echo $restricciones?></li>
            <li class='list-group-item'>Sinopsis: <?php echo $sinopsis?></li>
            <li class='list-group-item'>Imagen: <img src=' <?php echo $imagen?>' alt='Imagen de la película' class='img-fluid'></li>
        </ul>
    </div>
</body>
</html>

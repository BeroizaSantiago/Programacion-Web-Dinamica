<?php
$dir = "../../uploads/"; // Definimos el directorio donde se guardará el archivo
$target_file = $dir . basename($_FILES["archivo"]["name"]);
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verificamos el tipo de archivo
if ($fileType != "txt") {
    echo "Error: Solo se permiten archivos de texto (.txt).";
} else {
        // Comprobamos que no haya errores al subir el archivo
    if ($_FILES['archivo']['error'] == 0) {
        // Movemos el archivo a la carpeta uploads
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_file)) {
            // Leemos el contenido del archivo y lo mostramos en un textarea
            $contenido = file_get_contents($target_file);
            echo "<h1>Contenido del archivo:</h1>";
            echo "<textarea rows='20' cols='50'>" . $contenido . "</textarea>";
        } else {
            echo "Error al mover el archivo subido.";
        }
    } else {
        echo "Error al subir el archivo.";
    }
}
?>

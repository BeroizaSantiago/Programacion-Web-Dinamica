<?php
$dir = "../../uploads/"; // Definimos Directorio donde se guarda el archivo
$target_file = $dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); ///obtiene unicamente la extensión del archivo
$ruta = $target_file; // Ruta completa del archivo


// Check file size
if ($_FILES["fileToUpload"]["size"] < 2000000) {

    if ($fileType != "docx" && $fileType != "doc" && $fileType != "pdf") {
        echo "Solo archivos DOCX & PDF seran cargados.<br>";
    } else {
        // Comprobamos que no se hayan producido errores
        if ($_FILES['fileToUpload']["error"] <= 0) {
            echo "Nombre: " . $_FILES['fileToUpload']['name'] . "<br />";
            echo "Tipo: " . $_FILES['fileToUpload']['type'] . "<br />";
            echo "Tamaño: " . ($_FILES['fileToUpload']["size"] / 1024) . " kB<br />";
            echo "Carpeta temporal: " . $_FILES['fileToUpload']['tmp_name'] . " <br />";
            //Intentamos copiar el archivo al servidor
            if (!copy($_FILES['fileToUpload']['tmp_name'], $dir . $_FILES['fileToUpload']['name'])) {
                echo "ERROR: no se pudo cargar el archivo ";
            } else {
                echo "El archivo " . $_FILES['fileToUpload']['name'] . " se ha copiado con Éxito <br />";
                echo '<a href="' . $ruta . '">Haz clic aquí para ver el archivo</a>';
            }
        } else
            echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";;
    }
} else {
    echo "Archivo muy grande.<br>";
}

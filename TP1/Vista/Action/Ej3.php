<?php
// Recuperar los datos del formulario
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Desconocido';
$apellido = isset($_GET['apellido']) ? $_GET['apellido'] : 'Desconocido';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;
$direccion = isset($_GET['direccion']) ? $_GET['direccion'] : 'Desconocida';

// Mostrar el mensaje
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Información Recibida</title>
</head>
<body>
    <h1>Información Recibida</h1>
    <p>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</p>
    <br>
    <a href='../Ej3.html'>Volver al formulario</a>
</body>
</html>";
?>

<?php
require_once '../../Control/Ejercicio4.php';
require_once '../../Control/Ejercicio5.php';
// Recuperar los datos del formulario
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Desconocido';
$apellido = isset($_GET['apellido']) ? $_GET['apellido'] : 'Desconocido';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;
$direccion = isset($_GET['direccion']) ? $_GET['direccion'] : 'Desconocida';
$nivel_estudios = isset($_GET['nivel_estudios']) ? (int)$_GET['nivel_estudios'] : 0;
$sexo = isset($_GET['sexo']) ? $_GET['sexo'] : 'no especificado';

$objeEdad = new esMayor();
$esMayorDeEdad = $objeEdad->calcularEdad($edad);

// Determinar el nivel de estudios 
$objNivel = new Estudios();
$nivel_estudios_texto = $objNivel->nivelEstudios($nivel_estudios);

// Mostrar el mensaje correspondiente
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Información Recibida</title>
</head>
<body>
    <h1>Información Recibida</h1>";

    if ($edad > 0) {
        echo "<p>Nombre y Apellido: $nombre $apellido. <br> Edad: $edad años y $esMayorDeEdad .<br> Direccion: $direccion.</p>";
        echo "<p>Nivel de estudio: $nivel_estudios_texto. <br> sexo: $sexo.</p>";
    }else{
        echo "<p> No se ingresaron correctamente los datos";
    }
echo "<br>
<a href='../Ej5.html'>Volver al formulario</a>
</body>
</html>";
?>

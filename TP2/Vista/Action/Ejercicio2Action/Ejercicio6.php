<?php
require_once '../../../Control/Ejercicio2/Ejercicio6.php';
require_once '../../../../TP1/Control/Ejercicio4.php';
// Recuperar los datos del formulario
$nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Desconocido';
$apellido = isset($_GET['apellido']) ? htmlspecialchars($_GET['apellido']) : 'Desconocido';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;
$direccion = isset($_GET['direccion']) ? htmlspecialchars($_GET['direccion']) : 'Desconocida';
$nivel_estudios = isset($_GET['nivel_estudios']) ? (int)$_GET['nivel_estudios'] : 0;
$sexo = isset($_GET['sexo']) ? htmlspecialchars($_GET['sexo']) : 'no especificado';
$deportes = isset($_GET['deportes']) ? $_GET['deportes'] : [];

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

    // Contar la cantidad de deportes seleccionados
    $cantidad_deportes = count($deportes);

    // Mostrar los deportes seleccionados junto con la cantidad
    if ($cantidad_deportes > 0) {
        echo "<p>Practica $cantidad_deportes deporte(s): " . implode(', ', $deportes) . ".</p>"; //implode transforma en cadena el arreglo de deportes
    } else {
        echo "<p>No practica ningún deporte.</p>";
    }

echo "<br>
<a href='../../Ejercicio2/Ejercicio6.html'>Volver al formulario</a>
</body>
</html>";
?>
<?php
require_once '../../Control/Ejercicio4.php';
// Recuperar los datos del formulario
$nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Desconocido';
$apellido = isset($_GET['apellido']) ? htmlspecialchars($_GET['apellido']) : 'Desconocido';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;
$direccion = isset($_GET['direccion']) ? htmlspecialchars($_GET['direccion']) : 'Desconocida';
$nivel_estudios = isset($_GET['nivel_estudios']) ? (int)$_GET['nivel_estudios'] : 0;
$sexo = isset($_GET['sexo']) ? htmlspecialchars($_GET['sexo']) : 'no especificado';

$objeEdad = new esMayor();
$esMayorDeEdad = $objeEdad->calcularEdad($edad);

// Determinar el nivel de estudios 
//Se puede hacer en otro script como calcularEdad
switch ($nivel_estudios) {
    case 1:
        $nivel_estudios_texto = "No tiene estudios";
        break;
    case 2:
        $nivel_estudios_texto = "Estudios primarios";
        break;
    case 3:
        $nivel_estudios_texto = "Estudios secundarios";
        break;
    default:
        $nivel_estudios_texto = "No especificado";
        break;
}

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
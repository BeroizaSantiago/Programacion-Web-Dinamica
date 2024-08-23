<?php
require_once '../../Control/Ejercicio4.php';
// Recuperar los datos del formulario
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Desconocido';;
$apellido = isset($_GET['apellido']) ? $_GET['apellido'] : 'Desconocido';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;
$direccion = isset($_GET['direccion']) ? $_GET['direccion'] : 'Desconocida';

//Crear obj esmayor para saber si es mayor
$objeEdad = new esMayor();
$esMayorDeEdad = $objeEdad->calcularEdad($edad);


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
    echo "<p>$nombre $apellido, tiene $edad años y $esMayorDeEdad . Vive en $direccion.</p>";
}else{
    echo "<p> No se ingresaron correctamente los datos";
}
echo "<br>
<a href='../Ej4.html'>Volver al formulario</a>
</body>
</html>";
?>

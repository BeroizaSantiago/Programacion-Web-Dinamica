<?php
include_once '../../Control/Ejercicio2.php';
// Recuperar los datos del formulario
$horas = [
    'lunes' => isset($_GET['lunes']) ? (int)$_GET['lunes'] : 0,
    'martes' => isset($_GET['martes']) ? (int)$_GET['martes'] : 0,
    'miércoles' => isset($_GET['miércoles']) ? (int)$_GET['miércoles'] : 0,
    'jueves' => isset($_GET['jueves']) ? (int)$_GET['jueves'] : 0,
    'viernes' => isset($_GET['viernes']) ? (int)$_GET['viernes'] : 0,   
];

// Calcular la cantidad total de horas
$objHoras = new horas();
$totalHoras = $objHoras->sumaHoras($horas);

// Mostrar el total de horas directamente
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Total de Horas</title>
</head>
<body>
    <h1>Total de Horas de Cursada</h1>
    <p>Total de horas cursadas por semana: $totalHoras</p>
    <br>
    <a href='../Ej2.html'>Volver al formulario</a>
</body>
</html>";
?>

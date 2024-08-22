<?php
// Recuperar los datos del formulario
include_once '../../../Control/Ejercicio2/Ejercicio7.php';
$numero1 = isset($_POST['numero1']) ? (int)$_POST['numero1'] : 0;
$numero2 = isset($_POST['numero2']) ? (int)$_POST['numero2'] : 0;
$operacion = isset($_POST['operacion']) ? $_POST['operacion'] : 'suma';

// Inicializar variables
$objCalculadora = new calcular;
$resultado = $objCalculadora->calcularNumero($operacion,$numero1,$numero2);

// Mostrar el resultado
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultado de la Operación</title>
</head>
<body>
    <h1>Resultado de la Operación</h1>
    <p>Operación: La operacion realizada es de $operacion , de los numeros: $numero1 y $numero2</p>
    <p>Resultado: $resultado</p>
    <br>
    <a href='../../Ejercicio2/Ejercicio7.html'>Volver al formulario</a>
</body>
</html>";
?>

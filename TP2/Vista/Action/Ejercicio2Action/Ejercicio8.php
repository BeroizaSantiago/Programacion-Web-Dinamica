<?php
// Incluir la lógica de cálculo desde el archivo CalcularTarifa.php
require_once '../../../Control/Ejercicio2/Ejercicio8.php';

// Recuperar los datos del formulario
$edad = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
$estudiante = isset($_POST['estudiante']) ? $_POST['estudiante'] === 'si' : false;

// Crear una instancia de la clase que calcula la tarifa
$calculador = new CalcularTarifa($edad, $estudiante);

// Calcular el precio
$precio = $calculador->calcularPrecio();

// Mostrar el resultado

?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultado - Cinem@s</title>
</head>
<body>
    <h1><?php echo "El precio de tu entrada es: $$precio"?> </h1>
    <br>
    <a href='../../Ejercicio2/Ejercicio8.html'>Volver a calcular</a>
</body>
</html>
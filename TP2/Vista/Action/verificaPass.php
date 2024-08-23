<?php
require_once '../../Control/ejercicio3Verificador.php';

$usuario = isset($_GET['usuario']) ? $_GET['usuario']: '';
$clave = isset($_GET['clave']) ? $_GET['clave'] : '';

$verificador = new Verificador();
$esValido = $verificador->verificarCredenciales($usuario, $clave);

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultado del Login</title>
</head>
<body>";

if ($esValido) {
    echo "<h1>Bienvenido, $usuario!</h1>";
} else {
    echo "<h1>Error: Usuario o clave incorrectos.</h1>";
}

echo "<br><a href='../Ejercicio3Login.html'>Volver al login</a>
</body>
</html>";
?>

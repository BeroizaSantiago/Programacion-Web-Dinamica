<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Número</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['numero'])) { //isset verifica que no sea nulo o vacio
        $numero = $_POST['numero'];

        if ($numero > 0) {
            echo "<p>El número $numero es positivo.</p>";
        } elseif ($numero < 0) {
            echo "<p>El número $numero es negativo.</p>";
        } else {
            echo "<p>El número es cero.</p>";
        }
    } else {
        echo "<p>No se envió ningún número.</p>";
    }
    
    ?>


    <br>
    <a href="../Vista/Ej1.html">Volver al formulario</a>
</body>
</html>

<?php
//Calculadora
class calcular
{
    public function calcularNumero($operacion, $num1, $num2)
    {
        $resultado = 0;
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;

                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;

                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Indefinido, No se puede dividir por 0";
                }
                break;
            default:
                $resultado = "Indefinido. Operacion no realizada";
                break;
        }
        return $resultado;
    }
}

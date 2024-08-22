<?php
class esMayor {
    public function calcularEdad($edad){
        if ($edad > 0){
            $mensaje = "es menor de edad";
            if($edad >= 18){
                $mensaje = "es mayor de edad";
            }
        
        }else{
            $mensaje = "No se registro la edad";
        }
    return $mensaje;
    }
}
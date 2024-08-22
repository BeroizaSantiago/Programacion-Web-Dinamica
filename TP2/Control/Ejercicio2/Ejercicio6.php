<?php
class Estudios {
    public function nivelEstudios($nivel){
        $mensaje = "";
        switch ($nivel) {
            case 1:
                $mensaje = "No tiene estudios";
                break;
            case 2:
                $mensaje = "Estudios primarios";
                break;
            case 3:
                $mensaje = "Estudios secundarios";
                break;
            default:
                $mensaje = "No especificado";
                break;
        }

        return $mensaje;
    }
}
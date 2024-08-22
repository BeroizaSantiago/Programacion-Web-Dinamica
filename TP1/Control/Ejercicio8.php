<?php
class CalcularTarifa {
    private $edad;
    private $esEstudiante;

    public function __construct($edad, $esEstudiante) {
        $this->edad = $edad;
        $this->esEstudiante = $esEstudiante;
    }

    public function calcularPrecio() {
        if ($this->edad < 12) {
            return 160;
        } elseif ($this->esEstudiante && $this->edad >= 12) {
            return 180;
        } else {
            return 300;
        }
    }
}
?>

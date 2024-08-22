<?php
class horas {
    public function sumaHoras($horas){
            $totalHoras = 0;
            foreach ($horas as $t){
                $totalHoras += $t;
            }
            return $totalHoras;
    }
}
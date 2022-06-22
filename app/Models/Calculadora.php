<?php
namespace App\Models;

class Calculadora{
    public function sumar($numero1,$numero2){
        $suma = $numero1+$numero2;
        return $suma;
    }

    public function restar($numero1,$numero2){
        $restar = $numero1 - $numero2;
        return $restar;
    }

    public function multiplicar($numero1,$numero2){
        $multiplicacion = $numero1 * $numero2;
        return $multiplicacion;
    }

    public function division($numero1,$numero2){
        $division = $numero1 / $numero2;
        return $division;
    }
}
//php artisan make:test app/models/calculadoraTest
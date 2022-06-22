<?php

namespace Tests\Feature\app\models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Calculadora;

//pruebas unitarias con php unit
class calculadoraTest extends TestCase
{
    /**  @test*/
    public function verificarsumaMenorMayorpositivos():void{
        $numero1 = 1;
        $numero2 = 2;

        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals(3, $resultado);
    }

}

//para ejecutar la prueba unitaria se ejecuta
//vendor/bin/phpunit --filter calculadoraTest
   
  

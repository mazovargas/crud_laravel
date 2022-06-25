<?php

namespace Tests\Feature\app\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pedido;

class pedidosTest extends TestCase
{
    /**  @test */
    public function validartiposdedatos():void
    {
        $idPedido = 1;
        $idProducto = TRUE;
        $cantidad = 23.4;
        $precio = 345.9;
        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals("Datos incorrectos", $resultado);
       
    }

    /**  @test */
    public function VerificarCantidadNegativa():void
    { 
        $idPedido = 1;
        $idProducto = 5;
        $cantidad = -1;
        $precio = 20.4;
        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals("La cantidad no puede ser inferior a cero", $resultado);

    }

    /**  @test */
    public function VerificarPrecioNegativo():void
    { 
        $idPedido = 4;
        $idProducto = 8;
        $cantidad = 23.4;
        $precio = -1;
        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals("El precio no puede ser inferior a cero", $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel5_rango_inferior():void
    { 
        $idPedido = 4;
        $idProducto = 8;
        $cantidad = 1;
        $precio = 300;

        $descuento=0.05;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel5_rango_superior():void
    { 
        $idPedido = 4;
        $idProducto = 8;
        $cantidad = 100;
        $precio = 300;

        $descuento=0.05;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);

    }

    /**  @test */
    public function VerificarDescuentodel10_rango_inferior():void
    { 
        $idPedido = 7;
        $idProducto = 3;
        $cantidad = 101;
        $precio = 1000;

        $descuento=0.10;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel10_rango_superior():void
    { 
        $idPedido = 5;
        $idProducto = 9;
        $cantidad = 500;
        $precio = 2000;

        $descuento=0.10;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel12_rangoinferior():void
    { 
        $idPedido = 5;
        $idProducto = 9;
        $cantidad = 501;
        $precio = 5000;

        $descuento=0.12;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel12_rangosuperior():void
    { 
        $idPedido = 3;
        $idProducto = 4;
        $cantidad = 1000;
        $precio = 3000;

        $descuento=0.12;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }

    /**  @test */
    public function VerificarDescuentodel13():void
    { 
        $idPedido = 8;
        $idProducto = 1;
        $cantidad = 1001;
        $precio = 4000;

        $descuento=0.13;
        $valorTotal = ($cantidad * $precio) - ($cantidad * $precio)*$descuento;

        $pedido = new Pedido();
        $resultado = $pedido->CalcularDescuento($idPedido, $idProducto, $cantidad, $precio);
        $this->assertEquals($valorTotal, $resultado);


    }



}

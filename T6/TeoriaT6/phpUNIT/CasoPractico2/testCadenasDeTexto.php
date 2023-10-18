<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class testCadenasDeTexto extends TestCase{

    public function testStartWith(){

        $nuevaCadena= new CadenasDeTexto('Hola Mundo');

        /*assertTrue o assertFalse comprueban la salida de una función

        booleana*/

        $this->assertTrue($nuevaCadena->inicioCadena("Hola"));

        $this->assertFalse($nuevaCadena->inicioCadena("Mundo"));

        $this->assertFalse($nuevaCadena->inicioCadena("HOLA")); // no falla porque es case sensitive

        $this->assertFalse($nuevaCadena->inicioCadena("Hola")); #Esta prueba fallaría
    }
}
?>

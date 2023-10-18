<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

//require 'Act2T6.php'; // Incluye el archivo que contiene las funciones que quieres probar

class TestAct2T6 extends TestCase
{
    public function testValorFormulario()
    {
        // Establece manualmente los valores GET
        $_GET['nombre'] = 'John';
        

        // Llama a la función y verifica que devuelva los valores esperados
        $this->assertEquals('John', valorFormulario('nombre'));
        
        
        
        $_GET['apellidos'] = 'Doe';
        $this->assertEquals('Doe', valorFormulario('apellidos'));
    }
}

?>
<?php

/*creacion de FUNCIONES */

function saludar($nom, $ape){
    echo "hola $nom $ape"; #esta funcion no devuelve ningún valor, por lo que su resultado no podrá ser almacenado en ninguna variable.
}

saludar("Francisco","Garcia");
echo "<br>";

$nombre="Paco";
$apellido="pepe";

saludar($nombre,$apellido);
echo "<br>";
saludar($apellido,$nombre);
echo "<br>";

function saludarReturn($nom, $ape){
    return "hola $nom $ape"; #valor que devuelve la función y que puede ser almacenado en una variable
}

function saludarReturn2($nom, $ape){
    $saludo="hola " . $nom . " " . $ape;
    return $saludo; #valor que devuelve la función y que puede ser almacenado en una variable
}

$saludoReturn=saludarReturn("Lara", "De Vicente");
echo "<br>";
echo $saludoReturn;

echo "<br>";
$saludoReturn2=saludarReturn2("papa", "mama");
echo $saludoReturn2;
echo "<br>";
?>
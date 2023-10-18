<?php

/*
$nom= $_GET["nombre"];
$ap= $_GET["apellido"];
$ed=$_GET["edad"];

echo "Tu nombre es: $nom , tu apellido $ap , y tu edad $ed";
*/

echo "Tu nombre es: " . $_GET["nombre"] . " tu apellido " . $_GET["apellido"] . " y tu edad ". $_GET["edad"] . "<br>";

echo "Tu usuario es: " . $_POST["usuario"] . " tu apellido " . $_POST["contraseña"] . "<br>";


?>
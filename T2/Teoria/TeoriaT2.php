<?php
$miString ="Hola";
$miInteger =3;
$miFloat =3.50;

echo intval($miFloat) . "<br>";

echo $miFloat,$miInteger . "<br>" ." Esto sigue funcionando" . "<br>" ;

echo is_int($miFloat) . " hola ";

$cadena ="Esto es una cadena larga con espacios               ";
$cadena_trim=rtrim($cadena);
echo $cadena . " imprimo variable cadena <br>";
echo $cadena_trim . " imprimo variable cadena trimada <br>";

echo strlen($cadena) . " imprimo longitud cadena <br>";
echo strlen($cadena_trim) . " imprimo longitud cadena trimada <br>";

$cadena_minusc = strtolower($cadena); //str_lower no parece funcionar
$cadena_mayusc = strtoupper($cadena);// str_upper no parece funcionar

echo $cadena_minusc . " imprimo la cadena en minusculas <br>";
echo $cadena_mayusc . " imprimo la cadena en mayusculas <br>";


echo " <h1>Caso práctico 1</h1> <br>";

$varTexto="texto";
$varEntero=1234;
$varBoolean=true;
$varFloat=12.35;
$varArray=array("3","4");

echo "variable texto " . $varTexto ."<br>";

echo "Imprimo el array con el método print_r";
print_r($varArray);


?>

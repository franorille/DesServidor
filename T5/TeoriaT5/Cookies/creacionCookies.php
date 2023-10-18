<?php

$name= "cookie"; 
$value= "Fran es el mejor";
$expira= time() +(30 * 60); // tiempo de expiración de cookie. 
$ruta=""; //ruta que especifica el directorio del servidor de la cookie. Si no se pone nada, por defecto es el directorio donde se crea la cookie
$dominio=null; //el nombre del dominio de la cookie
$seguridad=false; //indica si la cookie solo puede tranmitirse a traves de protocolo seguro https
$soloHTTP=true; // indica si la cookie solo puede ser accesible a traves de protocolo http -- no podría accederse a ella a traves de lenguajes de script

setcookie($name,$value,$expira,$ruta,$dominio,$seguridad,$soloHTTP);
echo "cookie creada por fin<br>";

print_r($_COOKIE[$name]);
echo "<br>";
print_r($_COOKIE);



?>
<?php


if(!session_id()){ //!session_id() comprueba si existe una sesión. Esta función devuelve el nombre de la sesion, pero es tratada como un falsy o thruly por php, 
    //es decir, si es una cadena vacía (se considera falso y por tanto se cumple la condición), significará que no hay una sesión abierta, por lo que antes de cerrarla, se crea una.
    session_start();
}
session_destroy();
echo "has cerrado la sesión";

?>
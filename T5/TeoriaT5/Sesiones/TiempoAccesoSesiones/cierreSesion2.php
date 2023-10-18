<?php
session_start();
echo "hola";
//Se indica el tiempo de actividad (seg)
$tiempoInactivo = 5;
// Si existe un valor para la clave timeout, la sesión ha sido establecida y se
$_SESSION["timeout"] = time();
if (isset($_SESSION["timeout"])) {
    //Se calcula el tiempo que ha transcurrido desde que se conectó
    $sessionTTL = time() - $_SESSION["timeout"];
    //Si el tiempo de inactividad supera al establecido se cierra la sesión y se lanza un fichero PHP con un aviso
    if ($sessionTTL > $tiempoInactivo) {
        session_destroy();
        echo "se va a cerrar la sesion por inactividad";
    }
}
//Se almacena la hora exacta del inicio o creación de sesión


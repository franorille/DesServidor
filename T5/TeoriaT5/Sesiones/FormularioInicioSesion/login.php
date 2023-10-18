<?php

    $nombre=$_POST["nombre"];
    $contrasena=$_POST["pass"];

    if($nombre=="Fran" && $contrasena=="1234"){
        session_start();
        $_SESSION["id"]=$nombre;

        echo "Se ha creado una sesion con el nombre de usuario " . $_SESSION["id"] ." <br>";
    }else{
        echo "Usuario no autorizado";
    }

?>
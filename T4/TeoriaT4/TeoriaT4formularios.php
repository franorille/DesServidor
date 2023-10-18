<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria formularios</title>
</head>

<body>
    <form action="TeoriaT4formularios.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <button type="submit">Envia</button>
    </form>
    <?php

        /*
        $nom= $_GET["nombre"];
        $ap= $_GET["apellido"];
        $ed=$_GET["edad"];

        echo "Tu nombre es: $nom , tu apellido $ap , y tu edad $ed";
        */
       
        echo "Tu nombre es: " . $_GET["nombre"] . " tu apellido " . $_GET["apellido"] . " y tu edad ". $_GET["edad"];

        
    ?>
</body>

</html>
<?php



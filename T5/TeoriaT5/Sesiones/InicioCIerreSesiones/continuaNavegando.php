<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estas en otra pagina</title>
</head>

<body>

    <h3>continuas navegando</h3>


    <?php

    session_start(); // necesita recuperar esa sesión abierta para que siga funcionando la sesión
    if (isset($_SESSION["id"])) {
        echo "bienvenido de nuevo" . $_SESSION["id"];
    }
    print_r($_SESSION);

    ?>

</body>

</html>
<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

   
    
    echo "El usuario " . $_SESSION["id"] . " ha establecido conexión correctamente <br>";
    ?>

    <a href="compruebaLogin.php">Comprueba Login</a> <br>
    <a href="eliminarConexion.php">Eliminar conexión</a> <br>
    <a href="index.html">Indice</a> <br>
    <a href="home.php">Home</a> <br>


</body>

</html>
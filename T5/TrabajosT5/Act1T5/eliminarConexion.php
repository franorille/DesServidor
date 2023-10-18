<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Conexión</title>
</head>

<body>

    <?php
    if (!session_id()) {
        session_start();
        echo "Se ha tenido que iniciar la sesión antes de cerrarla";
    } else {
        session_destroy();
        echo "Finalizada la sesión <br>";
    }


    ?>

    <a href="compruebaLogin.php">Comprueba Login</a> <br>
    <a href="establecerConexion.php">Establecer conexion</a> <br>
    <a href="index.html">Indice</a> <br>
    <a href="home.php">Home</a> <br>
</body>

</html>
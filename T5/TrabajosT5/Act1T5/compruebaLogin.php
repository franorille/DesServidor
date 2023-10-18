<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba Login</title>
</head>
<body>

<form action="" method="post">
    Nombre: <input type="text" name="usuario" id="usuario"> <br> <br>
    Contraseña: <input type="password" name="pass" id="pass"> <br> <br>
    <input type="submit" value="Login">
</form>
    
<?php

    if(!isset($usuario)){

        $usuario=$_POST["usuario"];
        $contrasena=$_POST["pass"];

        if($usuario=="fran" && $contrasena=="1234"){
        session_start();
        $_SESSION["id"] = $usuario;
        echo "El usuario " . $_SESSION["id"] . " ha establecido conexión correctamente <br>";
        
        }else{
        echo "Usuario y/o contraseña incorrecta <br>";
        }
    }
?>


    <a href="eliminarConexion.php">Eliminar conexión</a> <br>
    <a href="establecerConexion.php">Establecer conexion</a> <br>
    <a href="index.html">Indice</a> <br>
    <a href="home.php">Home</a> <br>

</body>
</html>
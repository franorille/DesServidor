<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="nom">Nombre:</label>
        <input type="text" name="nombre" id="nom">
        <button type="submit">Enviar</button>
    </form>

    <?php

        session_start();

        $tiempoInactivo=10;
        $_SESSION["timeout"]=time(); // almacena la hora del inicio de la sesión
        $para=false;
       
        if(isset($_SESSION["timeout"])){
            $sessionTTL=time()-$_SESSION["timeout"]; // cálculo de tiempo desde que se conecto

            if($sessionTTL>$tiempoInactivo){
                
                session_destroy();
                header("Location:cierreSesion.php");
                
                
            }
        }
    

        

    ?>

</body>

</html>
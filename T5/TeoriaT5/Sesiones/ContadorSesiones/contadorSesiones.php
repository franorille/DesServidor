<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Sesiones</title>
</head>
<body>
    
<?php

    session_start();
    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"]=1;
    }else{
        $_SESSION["contador"]++;
    }

    echo "Esta página se ha visto " . $_SESSION["contador"] . " veces <br>";
?>
</body>
</html>
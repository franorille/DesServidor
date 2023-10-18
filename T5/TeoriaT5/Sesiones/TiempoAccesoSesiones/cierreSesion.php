<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
echo "Se ha cerrado la sesión por seguridad, vuelve a conectar";
session_destroy();
?> 
<a href="TeoriaT5Sesion.php"></a>
</body>
</html>

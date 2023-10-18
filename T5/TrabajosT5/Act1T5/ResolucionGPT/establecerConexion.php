<?php
session_start();
$_SESSION['usuario'] = 'usuario_valido';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexión Establecida</title>
</head>
<body>
    <h1>Conexión Establecida</h1>
    <p>La variable de sesión se ha establecido correctamente.</p>
    <p><a href="home.php">Volver a la página de inicio</a></p>
</body>
</html>

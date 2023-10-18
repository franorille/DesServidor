<?php
session_start();
echo $_SESSION['usuario'];
unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexión Eliminada</title>
</head>
<body>
    <h1>Conexión Eliminada</h1>
    <p>La variable de sesión se ha eliminado correctamente.</p>
    <p><a href="home.php">Volver a la página de inicio</a></p>
</body>
</html>

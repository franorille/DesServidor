<?php
session_start();

function validarUsuario($usuario, $contrasena) {
    // Aquí implementa tu lógica de validación de usuario y contraseña
    // Por ejemplo, puedes compararlos con valores predefinidos o buscar en una base de datos
    if ($usuario === 'fran' && $contrasena == "1234") {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    if (validarUsuario($usuario, $contrasena)) {
        $_SESSION['usuario_validado'] = true;
        header('Location: home.php');
        exit();
    } else {
        $mensaje_error = 'Usuario o contraseña incorrectos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Usuario</title>
</head>
<body>
    <h1>Validar Usuario</h1>
    <?php if (isset($mensaje_error)) { ?>
        <p style="color: red;"><?php echo $mensaje_error; ?></p>
    <?php } ?>
    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <p><a href="home.php">Volver a la página de inicio</a></p>
</body>
</html>

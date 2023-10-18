    <?php

    
    function valorFormulario($valor, $aux = "")
    {
        if (!isset($_GET[$valor])) {
            $aux2 = (is_array($aux)) ? [] : "";
        } elseif (!is_array($_GET[$valor])) {
            $aux2 = trim(htmlspecialchars($_REQUEST[$valor], ENT_QUOTES, "UTF-8"));
        } else {
            $aux2 = $_GET[$valor];
            array_walk_recursive($aux2, function (&$valor) {
                $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
            });
        }

        return $aux2;
    }
    $cadenaNombre = valorFormulario("nombre");
    $cadenaApe = valorFormulario("apellidos");

    print " <p>El nombre introducido es $cadenaNombre.</p>\n";
    print "\n";
    print " <p>El apellido introducido es $cadenaApe.</p>\n";
    print "\n";

    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ejemplo</title>
</head>

<body>

    <h1>Formulario de Ejemplo</h1>

    <form action="" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>
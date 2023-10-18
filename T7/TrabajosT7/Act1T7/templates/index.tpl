<html>
<head>
    <title>Saludo Smarty</title>
</head>
<body>
    {$mensaje}
    <form method="post">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Enviar">
    
    <p>Tu nombre es {$nombre}</p>
    </form>
</body>
</html>
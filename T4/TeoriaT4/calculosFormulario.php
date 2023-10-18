<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculos en formulario</title>
</head>
<body>
    <form action="calculosFormulario.php" method="get">
        <input type="text" name="valor1" id="valor1">
        <input type="text" name="valor2" id="valor2">
        <input type="submit" name="submit" value="Envia">
    </form>
    <?php
    
    if (isset($_GET['submit'])) {
        $val1= $_GET["valor1"];
        $val2= $_GET["valor2"];
        $result= $val1+$val2;
        echo $result . "<br>";
    }

    
    
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 Tema 9</title>
</head>

<body>

    <?php

    // VARIABLES PARA CONEXION

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bbdd = "bbdd_store";


    // FUNCION CREACION DE CONEXION CON MYSQLI

    function conectar($servidor, $usuario, $contrasena, $bbdd)
    {

        $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha pondido establecer la conexión " . mysqli_error($conexion));
        mysqli_select_db($conexion, $bbdd);
        return $conexion;
    }



    // FUNCION INSERTAR DATOS

    function insertaRegistro($con, $tienda, $codprod, $unidades)
    {
        $insertaDatos = "INSERT INTO tabla_stock (tienda, codigo_producto,unidades) VALUES ('$tienda', '$codprod', $unidades)";
        mysqli_query($con, $insertaDatos) or die("Ha habido un problema en la ejecucion de la consulta");
    }

    //FUNCION PARA LEER TODOS LOS DATOS Y VISUALIZARLOS EN FORMA DE TABLA

    function leer($conexion)
    {
        $query = "SELECT * FROM tabla_stock";
        $resultado = mysqli_query($conexion, $query) or die("Ha habido un problema en la ejecución de la consulta");

        echo "<table>";
        echo "<tr>";
        echo "<th> <h4>TIENDA</h4> </th>";
        echo "<th> <h4>COD. PROD.</h4> </th>";
        echo "<th> <h4>UNIDADES</h4> </th>";
        echo "</tr>";
        while ($row = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            foreach ($row as $dato) {
                echo "<td> $dato </td>\t";
            }
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($resultado);
    }
    function transaccion($con)
    {
        $sql1="UPDATE tabla_stock SET unidades=1 WHERE tienda='Tienda 1'";
        $sql2="UPDATE tabla_stock SET unidades=4 WHERE tienda='Tienda 2'";
        $sql3="UPDATE tabla_stock SET unidades=2 WHERE tienda='Tienda 3'";  
        $sql4="INSERT INTO tabla_stock (tienda, codigo_producto,unidades) VALUES ('Tienda 4', 'AAA', 10)";
        mysqli_begin_transaction($con);

        if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2) && mysqli_query($con,$sql3) && mysqli_query($con,$sql4)){
            mysqli_commit($con);
            echo "La transacción se ha almacenado correctamente";
        }else{
            mysqli_rollback($con);
            echo "La transacción ha experimentado un problema, no se han guardado cambios";
        }
        

    }


    // INICIO PROGRAMA

    $conectado = conectar($servidor, $usuario, $contrasena, $bbdd);


    transaccion($conectado);
    // leer($conectado);

    mysqli_close($conectado);


    ?>

</body>

</html>
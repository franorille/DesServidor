<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 Tema 9</title>
</head>

<body>

    <?php

    // VARIABLES PARA CONEXION

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bbdd = "personas";


    // FUNCION CREACION DE CONEXION CON MYSQLI

    function conectar($servidor, $usuario, $contrasena, $bbdd)
    {

        $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha pondido establecer la conexión " . mysqli_error($conexion));
        mysqli_select_db($conexion, $bbdd);
        return $conexion;
    }
    // FUNCION CREACION DE TABLA
    function createTable($con)
    {
        $createTable = "CREATE TABLE usuarios (
        id int,
        nombre varchar(50),
        apellido varchar(50)

    )";

        // EJECUCION QUERY 
        if (mysqli_query($con, $createTable)) {
            echo "creacion de tabla usuarios correcta";
        } else {
            echo "ha habido algún error en la creación de la tabla";
        }
    }

    // FUNCION INSERTAR DATOS

    function insertaRegistro($con, $id, $nom, $ape)
    {
        $insertaDatos = "INSERT INTO usuarios (id, nombre,apellido) VALUES ('$id','$nom','$ape')";
        mysqli_query($con, $insertaDatos) or die("Ha habido un problema en la ejecucion de la consulta");
    }
    
    //FUNCION PARA LEER TODOS LOS DATOS Y VISUALIZARLOS EN FORMA DE TABLA

    function leer($conexion)
    {
        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion, $query) or die("Ha habido un problema en la ejecución de la consulta");
        
        echo "<table>";
        echo "<tr>";
        echo "<th> <h4>ID</h4> </th>";
        echo "<th> <h4>NOMBRE</h4> </th>";
        echo "<th> <h4>APELLIDOS</h4> </th>";
        echo "</tr>";
        while($row=mysqli_fetch_row($resultado)){
            echo "<tr>";
            foreach ($row as $dato){
                echo "<td> $dato </td>\t";
            }
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($resultado);



    }

    // INICIO PROGRAMA

    $conectado = conectar($servidor, $usuario, $contrasena, $bbdd);
    
    // createTable($conectado); COMENTO ESTA LINEA PORQUE YA HE CREADO LA TABLA DESDE PHP

    /*
    COMENTO ESTO PORQUE YA HE INSERTADO ESTOS REGISTROS DESDE PHP, PARA NO DUPLICAR
    insertaRegistro($conectado,1,"Nombre 1","Apellido 1");
    insertaRegistro($conectado,2,"Nombre 2","Apellido 2");
    insertaRegistro($conectado,3,"Nombre 3","Apellido 3");
    insertaRegistro($conectado,4,"Nombre 4","Apellido 4");
    insertaRegistro($conectado,5,"Nombre 5","Apellido 5");
    */

    leer($conectado);
    mysqli_close($conectado);

    ?>

</body>

</html>
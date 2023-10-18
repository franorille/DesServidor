<?php
/*
    Conexión con BD creada en el curso pasado, en servidor localhost mediante programa en java.

*/ 
//ESTABLECER CONEXION
$hostname="localhost";
$user="root";
$pass="";
$conexion=mysqli_connect($hostname, $user,$pass) or die("No se ha podido establecer la conexión" . mysqli_connect_error());

//CONECTAR CON BBDD
$bd="personas";
mysqli_select_db($conexion, $bd) or die("No se seleccionó correctamente la base de datos");

//ESTABLECER UNA QUERY

$query="SELECT * FROM persona";

// ALMACENAMIENTO DE RESULTADOS DE LA QUERY
$result= mysqli_query($conexion,$query) or die("La consulta ha fallado" . mysqli_error($conexion));

//RECORRER RESULTADOS DE QUERY
echo "<table>\n";
while($linea= mysqli_fetch_row($result)){
 echo "<tr>\n";
 foreach($linea as $dato){
echo "<td> $dato </td>\t";
 }
 echo "</tr>";
}
echo "</table>\n";


echo mysqli_num_rows($result) . " \t numero de filas de \nvariable resultado <br>";
echo mysqli_affected_rows($conexion). " numero de filas afectada por operación sql <br>";
echo mysqli_num_fields ($result). " número de campos de variable resultado <br>";
$unDato=mysqli_fetch_field ($result);
print_r($unDato);
// no existe en mysqli mysql_field_len($result,0). "<br>";

// no existe en mysqli mysqli_result($result). "<br>";
//LIBERAR RESULTADOS
mysqli_free_result($result);

//CIERRE CONEXION
mysqli_close($conexion);

$archivo=fopen("C:/xampp/htdocs/DesWebServ/T9/TeoriaT9/Datos/SampleCSV.csv","r");

echo "<br>";
while(!feof($archivo)){
    print_r(fgetcsv($archivo)); 
    echo "<br>";
}

?>
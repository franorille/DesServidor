<!DOCTYPE html>
<html>
<body>

<?php


/*
FUNCIONES DE FECHA Y HORA
*/

// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975)) . "<br>";

echo date("d m y h:i:s") . "<br>"; 

/*
FUNCION NÚMEROS ALEATORIOS
rand (nºmin_opt, nºmax_opt); sin parámetros es aleatorio sin límite
*/

echo rand(5,10) . "<br>";
echo rand() . "<br>";

/*
FUNCION DIRECTORIO 
devuelve ruta completa desde raiz donde se está trabajando
*/

echo getcwd() . "<br>";

/*
 IMPRESION CADENAS DE TEXTO
 */

 echo "hola con echo sin paréntesis <br>";
 print "hola con print sin paréntesis <br>";
 print ("hola con print con paréntesis <br>");
 echo "la función print_r puede imprimir el contenido de un array";

 /*
 BUSQUEDA DE FICHEROS
 */

 $directorioFichero=glob("*.php"); #parece que solo busca en el directorio actual
 print_r($directorioFichero);

 /*
 CREACION DE FICHEROS 
 */

 //queda vinculado el archivo a esta variable
 $archivo=fopen("C:/xampp/htdocs/DesWebServ/T4/TeoriaT4/TeoriaT4.php", "r+");
 //cierre del vínculo con el archivo
fclose($archivo);

$archivoInexistente=fopen("hola.txt","a+");
fclose($archivoInexistente);
?>

</body>
</html>
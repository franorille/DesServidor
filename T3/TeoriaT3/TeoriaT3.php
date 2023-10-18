<?php
for ($z = 0; $z < 3; $z++) {
    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
                break 2;
                // al indicar break 2 al llegar saldrá del if, además del bucle de la x y del bucle de la y, pero no llega al bucle de la z
                #también se puede comentar una línea así 
                /*
                comentarios de 
                más de una línea
                */
            }
        echo "The number is: $x <br>";
        }
    }
}
echo "al indicar break 2 al llegar saldrá del if, además del bucle de la x y del bucle de la y, pero no llega al bucle de la z <br>";

echo "Matrices <br>";

$miArray = array("Pos0"=> 0, "Pos1"=> 1, "Pos2"=> 2, "Pos3"=> 3);
$miArray2 = array(5,8,6,7);
$miArray2[]=8;

echo ("le he añadido un último elemento al array 2 cuyo valor es 8 con el código $ miArray2[]=8; <br>");
echo "miArray2 ahora es <br>";
print_r($miArray2);
echo "<br>";

print_r(array_merge($miArray,$miArray2));

echo "<br>";

$miMatriz= array("fila0"=>$miArray, "fila1"=>$miArray2);

echo "fila 0 columna 1 es: " . $miMatriz["fila0"]["Pos1"];
echo "<br>";

print_r($miMatriz);

echo "<br>";

$fila1 = array(1,2,3,4,5);
$fila2 = array(6,7,8,9,10);
$fila3 = array(11,12,13,14,15);

$miMatriz2 = array($fila1,$fila2,$fila3);
print_r($miMatriz2); // esto tiene validez?
#esto vale también?
echo "<br>";

echo "valor de la fila 1 columna 3: " . $miMatriz2[1][3];

echo "<br>";

$usuarios = array(
    "User1" => array("User1", "Pass1", "admin"),
    "User2" => array("User2", "Pass2", "user"),
    "User3" => array("User3", "Pass3", "admin")
);

echo "El usuario User 1 tiene el nombre " . $usuarios["User1"][0] .
 " ,la contraseña " . $usuarios["User1"][1] . " y el perfil " . $usuarios["User1"][2] . "<br>";


 echo "break en array anidados nvl1 - i ; nvl2 - j ; nvl3 - k ; nvl4 - l ;<br>";
 for ($i = 0; $i < 4; $i++) { // nvl 1
    for ($j = 0; $j < 4; $j++) { // nvl 2
        for ($k = 0; $k < 4; $k++) { // nvl 3
            for ($l = 0; $l < 4; $l++) { // nvl 4
                if ($l == 2) {
                    echo "he llegado a l=2, por lo que salgo de dos niveles de bucle anidado <br>";
                    echo "<br>";
                    break 2; // Sale de los bucles de nivel 4 y 3
                    
                }
                echo "n1 i=" . $i . " n2 j=". $j . " n3 k=" . $k . " n4 l=" . $l . "<br>";
            }
        }
    }
}



/* resultado
n1 i=0 n2 j=0 n3 k=0 n4 l=0
n1 i=0 n2 j=0 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=0 n2 j=1 n3 k=0 n4 l=0
n1 i=0 n2 j=1 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=0 n2 j=2 n3 k=0 n4 l=0
n1 i=0 n2 j=2 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=0 n2 j=3 n3 k=0 n4 l=0
n1 i=0 n2 j=3 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=1 n2 j=0 n3 k=0 n4 l=0
n1 i=1 n2 j=0 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=1 n2 j=1 n3 k=0 n4 l=0
n1 i=1 n2 j=1 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=1 n2 j=2 n3 k=0 n4 l=0
n1 i=1 n2 j=2 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=1 n2 j=3 n3 k=0 n4 l=0
n1 i=1 n2 j=3 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=2 n2 j=0 n3 k=0 n4 l=0
n1 i=2 n2 j=0 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=2 n2 j=1 n3 k=0 n4 l=0
n1 i=2 n2 j=1 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=2 n2 j=2 n3 k=0 n4 l=0
n1 i=2 n2 j=2 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=2 n2 j=3 n3 k=0 n4 l=0
n1 i=2 n2 j=3 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=3 n2 j=0 n3 k=0 n4 l=0
n1 i=3 n2 j=0 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=3 n2 j=1 n3 k=0 n4 l=0
n1 i=3 n2 j=1 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=3 n2 j=2 n3 k=0 n4 l=0
n1 i=3 n2 j=2 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado

n1 i=3 n2 j=3 n3 k=0 n4 l=0
n1 i=3 n2 j=3 n3 k=0 n4 l=1
he llegado a l=2, por lo que salgo de dos niveles de bucle anidado
*/

echo "ordenacion de arrays <br>";

$arrayNoOrdenado=array(5,7,-5,15,70);
 //oj

echo "array no ordenado: <br>";
print_r($arrayNoOrdenado);
echo "<br>";

echo "array ordenado menos a mas <br>";
sort($arrayNoOrdenado);
print_r($arrayNoOrdenado);
echo "<br>";

echo "array ordenado de mas a menos rsort <br>";
rsort($arrayNoOrdenado);
print_r($arrayNoOrdenado);
echo "<br>";
?>
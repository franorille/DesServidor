<?php

    $filas=array();
    $numero=0;
    for ($i=0;$i<6;$i++){
        $filas[$i]=array();

        for($j=0;$j<6;$j++){
            $filas[$i][$j]=$numero;
            $numero++;
        }
    }

    foreach($filas as $fila){
        echo "<br>";
        foreach($fila as $dato){
           echo $dato . "\t";
        }
    }
    unset($fila, $dato);
?>
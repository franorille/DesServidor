<?php

    $log= $_POST["usuario"];
    $pass=$_POST["contraseña"];


    function checkLog($log){

        if(strlen($log)<=15 && strlen($log)>6){
            
            return true;

        }return false;
        echo $log ."<br>";
    }

    function checkPass($pass){

        if(strlen($pass)==7){
            return true;

        }return false;
        echo $pass ."<br>";
    }

    function checkEqual($pass,$log){
        if($pass!=$log){
            return true;
        }return false;
    }


    if(checkLog($log) && checkPass($pass) && checkEqual($pass,$log)){
        echo "Todo correcto";
    }else{
        echo "Incorrecto, vuelve a rellenar el formulario";
    }



?>
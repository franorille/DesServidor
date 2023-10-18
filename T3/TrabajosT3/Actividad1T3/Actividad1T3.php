<?php

$user = "User 1";
$pin = 1234;

if ($user == "User 1" && $pin == 1234) {
    echo "Genial, puedes pasar!!";
} else if ($user == "User 1" && $pin != 1234) {
    echo "Lo siento, el usuario es correcto, pero el pin no";
} else if ($user != "User 1" && $pin == 1234) {
    echo "Lo siento, este usuario no es válido";
} else {
    echo "No has acertado ninguna";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticacion LDAP con formulario</title>
</head>

<body>

    <form action="" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user"> <br>
        <label for="pass">Contraseña:</label>
        <input type="text" name="pass" id="pass"> <br>
        <input type="submit" value="Login"> <br>
    </form>
    <?php

    $host= "ldap.forumsys.com";
    $port = 389;
    //$user = "cn=read-only-admin,dc=example,dc=com";
    //$pass = "password";

    $user=$_POST["user"];
    $pass=$_POST["pass"];
    $idConexion = ldap_connect($host, $port) or die("No se ha podido conectar al servidor");
    ldap_set_option($idConexion, LDAP_OPT_PROTOCOL_VERSION,3);
    if ($idConexion) {
        $validacionConexion = ldap_bind($idConexion, $user, $pass);
        if($validacionConexion){
            echo "conexion correcta";
        }else{
            echo "no se ha conectado";
        }
    }
    ?>


</body>

</html>
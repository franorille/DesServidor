<?php

$host = "ldap.forumsys.com";
$port = 389;
//usuario debe ser = "cn=read-only-admin,dc=example,dc=com";
// contraseña debe ser = "password";

$user = $_POST["user"];
$pass = $_POST["pass"];
$idConexion = ldap_connect($host, $port) or die("No se ha podido conectar al servidor");
ldap_set_option($idConexion, LDAP_OPT_PROTOCOL_VERSION, 3);
if ($idConexion) {

    if (ldap_bind($idConexion, $user, $pass)) {
        echo "conexion correcta";
    } else {
        echo "no se ha conectado";
    }
}
?>

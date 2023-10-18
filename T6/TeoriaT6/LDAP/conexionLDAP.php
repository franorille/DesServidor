<?php
/* CONEXION A UN SERVIDOR LDAP*/
$hostname = "ldap.forumsys.com"; // servidor online de LDAP para no tener que configurar yo uno
$port = 389; // puerto indicado para la conexión al servidor LDAP
$user = "cn=read-only-admin,dc=example,dc=com"; //usuario mostrado en la web del servidor online
$pass = "password"; // contraseña indicada en la web del servidor
$idConexion = ldap_connect($hostname, $port) or die("No se ha podido establecer conexión con el servidor LDAP $hostname"); // creación de la conexión al servidor LDAP con los parámetros indicados
ldap_set_option($idConexion, LDAP_OPT_PROTOCOL_VERSION,3); // Tiene que ponerse esta configuración debido a un error de protocolo que me salio (lo busqué por internet)
if ($idConexion) { //si la conexión ha ido bien
    
    $enlaceCorrecto = ldap_bind($idConexion,$user,$pass); // comprobación de credenciales del usuario, si no se pone user y pass, se producirá un acceso anónimo, la función ldap_bind() devuelve un boolean
    if ($enlaceCorrecto) {
        echo "Autenticación <br>"; // si ldap_bind ha devuelto true, nos hemos conectado
    } else {
        echo "No autenticado <br>";
    }
}
/**/
ldap_close($idConexion);
echo "fin conexión a servidor LDAP"
?>

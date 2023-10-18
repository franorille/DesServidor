<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 Tema 5. Contador con cookies</title>
</head>

<body>

    <?php
    setcookie("contador", $_COOKIE["contador"] + 1, time() + 365 * 24 * 60 * 60);
    // función para crear una cookie que se almacena en el pc del usuario cliente. El nombre de la cookie será contador,
    // y su valor almacena $_COOKIE["contador"] + 1, que es un contador que incrementa en una unidad cada vez que visita una web
    // Para visualizar el valor, se hace la llamada a la variable global $_COOKIE["nombre_cookie"] para obtener su valor.
    // Tiene una validez de 1 año desde hoy.
    // No se ha especificado la ruta
    
    // setcookie((string $name, $value = "valor que le quieras dar a la cookie", $expires_or_options = 0, $path = "", $domain = "", $secure = false, $httponly = false));

    //  Optional. Specifies the server path of the cookie. If set to "/", the cookie will be available within the entire domain. If set to "/php/", the cookie will only be available 
    //  within the php directory and all sub-directories of php. The default value is the current directory that the cookie is being set in),
    
    //  el dominio,
    //  Optional. Specifies the domain name of the cookie. To make the cookie available on all subdomains of example.com, set domain to "example.com". Setting it to www.example.com will make the cookie only available in the www subdomain
    
    //  la seguridad 
    //  Optional. Specifies whether or not the cookie should only be transmitted over a secure HTTPS connection. TRUE indicates that the cookie will only be set if a secure connection exists. Default is FALSE
    
    //  protocolo php
    //  Optional. If set to TRUE the cookie will be accessible only through the HTTP protocol (the cookie will not be accessible by scripting languages). This setting can help to reduce identity theft through XSS attacks. Default is FALSE
    
    
    ?>

    <p>Este usuario ha visitado la página <span style="color:red; font-size:larger"><?php echo $_COOKIE["contador"] ?> </span> veces</p>

</body>

</html>
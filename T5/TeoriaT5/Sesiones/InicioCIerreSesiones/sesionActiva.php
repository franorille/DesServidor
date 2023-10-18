  
     <?php
      
      $usuario= $_GET["nombre"];
      session_start(); //creación sesión

     
      $_SESSION["id"]=$usuario;

      echo "el nombre de usuario es " . $_SESSION["id"] . "<br>";

    ?>
    <a href="cerrarSesion.php">pincha para cerrar sesión</a>
    <a href="continuaNavegando.php">continua navegando</a>
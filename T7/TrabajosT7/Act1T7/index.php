<?php
require('Smarty.class.php');
$miSmarty = new Smarty();
$miSmarty->template_dir = 'templates';
$miSmarty->config_dir = 'config';
$miSmarty->cache_dir = 'cache';
$miSmarty->compile_dir = 'templates_c';
$miSmarty->assign("mensaje", "Hola mundo con Smarty");
//$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ''; // Obtiene el nombre del formulario
$miSmarty->assign('nombre', $_POST["nombre"]);
$miSmarty->display("index.tpl");
?>

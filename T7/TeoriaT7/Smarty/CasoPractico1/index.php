<?php
require('Smarty.class.php');
$miSmarty = new Smarty();
$miSmarty->template_dir = 'templates';
$miSmarty->config_dir = 'config';
$miSmarty->cache_dir = 'cache';
$miSmarty->compile_dir = 'templates_c';
$miSmarty->assign("cadenaTexto", "Hola mundo con Smarty");
$miSmarty->display("interfazPresentacion.tpl");
?>

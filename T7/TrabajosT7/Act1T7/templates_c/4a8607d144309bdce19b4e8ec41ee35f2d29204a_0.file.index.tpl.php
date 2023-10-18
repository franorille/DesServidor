<?php
/* Smarty version 4.3.0, created on 2023-09-24 12:52:02
  from 'C:\xampp\htdocs\DesWebServ\T7\TrabajosT7\Act1T7\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_651014d2cbce62_25101517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8607d144309bdce19b4e8ec41ee35f2d29204a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DesWebServ\\T7\\TrabajosT7\\Act1T7\\templates\\index.tpl',
      1 => 1695552685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651014d2cbce62_25101517 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Saludo Smarty</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

    <form method="post">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Enviar">
    
    <p>Tu nombre es <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
    </form>
</body>
</html><?php }
}

<?php
/* Smarty version 4.3.1, created on 2023-04-01 21:33:52
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6428a340b5c129_36003220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d72d36bb178b913a8d0bc256bc2f73b1062eb8f' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\404.tpl',
      1 => 1680384829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6428a340b5c129_36003220 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div><h4>ERROR CODE: <?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 </h4></div>
    <div><h4>ERROR MESSAGE: <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4></div>
    <a href="/">HOME</a>
    <?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
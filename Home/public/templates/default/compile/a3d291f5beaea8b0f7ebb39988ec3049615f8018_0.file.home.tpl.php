<?php
/* Smarty version 4.3.1, created on 2023-04-02 12:29:39
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64297533831788_44767988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d291f5beaea8b0f7ebb39988ec3049615f8018' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\home.tpl',
      1 => 1680438568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_64297533831788_44767988 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>HOME PAGE</div>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
        <div>Logged in as <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</div>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
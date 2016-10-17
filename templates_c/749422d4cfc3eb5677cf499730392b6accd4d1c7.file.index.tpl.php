<?php /* Smarty version Smarty-3.1.6, created on 2016-10-17 12:16:56
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1409657fe6403b868c2-70590352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1476699413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409657fe6403b868c2-70590352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57fe640465d1d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe640465d1d')) {function content_57fe640465d1d($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("config.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>task</title>
        <?php echo $_smarty_tpl->getSubTemplate ("includeAllLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <div class="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ('content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>  
            <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       
    </body>
</html><?php }} ?>
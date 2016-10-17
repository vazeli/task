<?php /* Smarty version Smarty-3.1.6, created on 2016-10-17 12:18:29
         compiled from ".\templates\user_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648158023e8a7324c5-94391845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a940bfa4c3f97f98f865a3c83b9493fb1df7bac' => 
    array (
      0 => '.\\templates\\user_info.tpl',
      1 => 1476699465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648158023e8a7324c5-94391845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58023e8a7fd12',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58023e8a7fd12')) {function content_58023e8a7fd12($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>user info</title>
        <?php echo $_smarty_tpl->getSubTemplate ("includeAllLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <div class="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
            <div class="title">user info</div>
            
            <div class="content">
                <form action="user_info.php" method="POST">
                    <div class="input_block">
                        <p>nick</p>
                        <input type="text" name="user_name" value = "<?php echo $_smarty_tpl->tpl_vars['data']->value['nick'];?>
" disabled>
                    </div>
                    <div class="input_block">
                        <p>first name</p>
                        <input type="text" name="first_name" value = "<?php echo $_smarty_tpl->tpl_vars['data']->value['firstname'];?>
">
                    </div>
                    <div class="input_block">
                        <p>last name</p>
                        <input type="text" name="last_name" value = "<?php echo $_smarty_tpl->tpl_vars['data']->value['lastname'];?>
">
                    </div>
                    <div class="input_block">
                        <p>email</p>
                        <input type="text" name="email" value = "<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
                    </div>
                    <div class="input_block">
                        <input type="submit" value = "edit" onclick="editUserData(this.form);">
                    </div>
                </form>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>
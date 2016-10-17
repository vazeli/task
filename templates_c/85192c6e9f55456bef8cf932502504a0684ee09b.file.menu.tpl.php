<?php /* Smarty version Smarty-3.1.6, created on 2016-10-16 12:54:30
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980357fe68a54afdb2-21033966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1476615258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980357fe68a54afdb2-21033966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57fe68a54b655',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe68a54b655')) {function content_57fe68a54b655($_smarty_tpl) {?><div class="wrapper_menu">
    <div class="menu">
            <ul>
                <li><a href="index.php">main page</a></li>
                <li><a href="user_info.php">user info</a></li>
                <li onclick="showFormLogIn();"><a href="#">log in</a></li>
                <li onclick="showFormSignUp();"><a href="#">sign up</a></li>
                <li><a href="logout.php">log out</a></li>
            </ul>
    </div>
</div>

<div class="sign_up" >
    <div   class="close" onclick="quit(this);">X</div>
    <form action="validate.php" method="POST">
        <div class="input_block">
            <p>input name</p>
            <input type="text" name="user_name">
        </div>
        <div class="input_block">
            <p>input email</p>
            <input type="text" name="email">
        </div>
        <div class="input_block">
            <p>input new password</p>
            <input type="text" name="password">
        </div>
        <div class="input_block">
            <p>repeat password</p>
            <input type="text" name="re_password">
        </div>
        <div class="input_block">
            <input type="submit" name="sign_up" value="sign up" onclick="return validate('sign_up', this.form);">
        </div>
        <div class="input_block hide" >
            <p>insert code</p>
            <input type="text" name="code">
        </div>
        <div class="input_block hide">
            <input type="submit" name="check_code" value="check code" onclick="return validate('check_code', this.form);">
        </div>
    </form>
</div>

<div class="log_in">
    <div class="close" onclick="quit(this);">X</div>
    <form action="validate.php" method="POST">
        <div class="input_block">
            <p>input name</p>
            <input type="text" name="user_name">
        </div>
        <div class="input_block">
            <p>input password</p>
            <input type="text" name="password">
        </div>
        <div class="input_block">
            <input type="submit" name="log_in" value="log in" onclick="return validate('log_in', this.form);">
        </div>
    </form>
</div>

<?php }} ?>
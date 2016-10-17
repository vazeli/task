<div class="wrapper_menu">
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


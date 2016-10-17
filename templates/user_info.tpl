<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>user info</title>
        {include file="includeAllLink.tpl"}
    </head>
    <body>
        <div class="wrapper">
            {include file='header.tpl'}
            {include file='menu.tpl'}
            
            <div class="title">user info</div>
            
            <div class="content">
                <form action="user_info.php" method="POST">
                    <div class="input_block">
                        <p>nick</p>
                        <input type="text" name="user_name" value = "{$data['nick']}" disabled>
                    </div>
                    <div class="input_block">
                        <p>first name</p>
                        <input type="text" name="first_name" value = "{$data['firstname']}">
                    </div>
                    <div class="input_block">
                        <p>last name</p>
                        <input type="text" name="last_name" value = "{$data['lastname']}">
                    </div>
                    <div class="input_block">
                        <p>email</p>
                        <input type="text" name="email" value = "{$data['email']}">
                    </div>
                    <div class="input_block">
                        <input type="submit" value = "edit" onclick="editUserData(this.form);">
                    </div>
                </form>
            </div>
        </div>
        {include file='footer.tpl'}
    </body>
</html>
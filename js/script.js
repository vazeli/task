function showFormSignUp() {
    checkbrouser();
    var log_in = document.getElementsByClassName('log_in')[0];
    if(log_in.style.display === "block");
      log_in.style.display = "none";
    document.getElementsByClassName('sign_up')[0].style.display = "block";
}

function showFormLogIn() {
    checkbrouser();
    var sign_up = document.getElementsByClassName('sign_up')[0];
    if(sign_up.style.display === "block");
        sign_up.style.display = "none";
    document.getElementsByClassName('log_in')[0].style.display = "block";
}

function quit(e){
    e.parentElement.style.display = 'none';
}

function validate(type, form){
    var el = form.elements;
    var err = 0;
    var leaveform = false;
    switch(type){
        case "sign_up":
            resetError(el.user_name);
            if(!el.user_name.value){
                showError(el.user_name);
                err++;
            }
            resetError(el.email);
            if(!el.email.value){
                showError(el.email);
                err++;
            }
            resetError(el.password);
            if(!el.password.value){
                showError(el.password);
                err++;
            }
            resetError(el.re_password);
            if(!el.re_password.value) {
                showError(el.re_password);
                err++;
            } else if (el.password.value !== el.re_password.value) {
                showError(el.password);
                showError(el.re_password);
                err++;
            }
            if (err === 0) {
                el.code.parentElement.style.display = "block";
                el.check_code.parentElement.style.display = "block";
                el.user_name.parentElement.style.display = "none";
                el.password.parentElement.style.display = "none";
                el.re_password.parentElement.style.display = "none";
                el.email.parentElement.style.display = "none";
                el.sign_up.parentElement.style.display = "none";
                $.ajax({
                    type: 'POST',
                    url: '../dataBase.php?type=new_user',
                    data: { 
                            nick: el.user_name.value,
                            password:el.password.value,
                            email: el.email.value
                        },
                    dataType: 'json',
                    success: function(code){
                        alert(code);
                    },
                    error: function(){
                        alert("err");
                    }
                });
            }
            
            return false;
            break;
            
        case "log_in":
            if(!el.user_name.value){
                showError(el.user_name);
                err++;
            }
            if (!el.password.value) {
                showError(el.password);
                err++;
            }
            if(err === 0) {
                return true;
            }
                
            break;
        
        case "check_code":
            $.ajax({
                type: 'POST',
                url: '../dataBase.php?type=equil_code',
                data: {
                    nick: el.user_name.value,
                    code: el.code.value
                },
                dataType: 'json',
                success: function(res){
                    if(res == true) {
                        leaveform = true;
                        return true;
                    }
                },
                error: function(){
                    alert("err");
                }
            }).done(function () {
                if(leaveform == true){
                    return true;
                }
                else{
                    return false;
                }
            });
            break;
    }
}

function showError(container){
    container.className = 'error';
}

function resetError(container){
    container.className = '';
}

function editUserData(form) {
    var el = form.elements;
    
    $.ajax({
        type: 'POST',
        url: '../dataBase.php?type=edit',
        data: { 
                nick: el.user_name.value,
                firstName:el.first_name.value,
                lastName: el.last_name.value,
                email: el.email.value
         
            },
        dataType: 'json',
        success: function(data){
            el.user_name.value = data['nick'];
            el.first_name.value = data['firstname'];
            el.last_name.value = data['lastname'];
            el.email.value = data['email'];
   
        }        
    });
}

function checkbrouser() {
    if(document.getElementsByClassName == undefined) {
        document.getElementsByClassName = function(cl) {
            var retnode = [];
            var myclass = new RegExp('\\b'+cl+'\\b');
            var elem = this.getElementsByTagName('*');
            for (var i = 0; i < elem.length; i++) {
                var classes = elem[i].className;
                if (myclass.test(classes)) {
                    retnode.push(elem[i]);
                }
            }
            return retnode;
        }
    }
}

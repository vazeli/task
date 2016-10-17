<?php
session_start();
include ('validateData.php');


//$err = 0;
$res = true;
if(isset($_POST['sign_up'])){
    /*
    if(!$_POST['user_name'])
        $err++;
    if(!$_POST['email'])
        $err++;
    if(!$_POST['password'])
        $err++;
    if(!$_POST['re_password'])
        $err++;*/
    $res = $validete->signUp($_POST);
}

if(isset($_POST['log_in'])){
/*
    if(!$_POST['user_name'])
        $err++;
    if(!$_POST['password'])
        $err++;
*/

    $res = $validete->logIn($_POST);
}

if($err==0){
    $_SESSION['user_name'] = $_POST['user_name'];
    $_SESSION['password'] = $_POST['password'];
    if(isset($_POST['check_code'])){
        $_SESSION['type'] = "sign_up";
        $_SESSION['email'] = $_POST['email'];
    }
    if(isset($_POST['log_in'])){
        $_SESSION['type'] = "log_in";    
    }
}
 else 
     echo "error in the input data";
 

 header('Location: dataBase.php');
 
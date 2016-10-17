<?php
session_start();

require_once('libs\Smarty.class.php');
require_once 'dataBaseClass.php';

if(isset($_SESSION['status'])){
    $smarty = new Smarty();
    $db = new dataBaseClass("localhost", "Task", "root", "");
    $db->connect();
    $data = $db->getUserData($_SESSION['user_name']);

    $smarty->assign("data", $data);
    $smarty->display('user_info.tpl');
}
else{
    $massage = "sign to the account";
    header("Location:index.php?mes=$massage");
}
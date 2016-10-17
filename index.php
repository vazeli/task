<?php
session_start();

require_once('libs\Smarty.class.php');

$smarty = new Smarty();

if( isset($_SESSION['status'])){
    if($_SESSION['status'] == "ok"){
        $smarty->assign("ContentText", "hello ".$_SESSION['user_name']);
    }
}
else{
    $smarty->assign("ContentText", "unknow user");
}

if(isset($_GET['mes'])){
    $smarty->assign("ContentText", $_GET['mes']);
    $smarty->assign("class", "error_massage");
}

$smarty->display('index.tpl');



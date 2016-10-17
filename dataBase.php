<?php
session_start();

include_once ('validateData.php');
include_once 'dataBaseClass.php';

$config = include ('configs/conf.php');

$db = new dataBaseClass($config['db']['host'], $config['db']['dbName'], $config['db']['user'], $config['db']['password']);
$db->connect();

if(isset($_SESSION['type']) && $_SESSION['type']=="sign_up"){
    $_SESSION['status'] = "ok";
    header("Location: index.php");
}


if(isset($_SESSION['type']) && $_SESSION['type']=="log_in"){
    if($db->checkPassword($_SESSION['user_name'], $_SESSION['password']))
        $_SESSION['status'] = "ok";
    else
        $_SESSION['status'] = "error";
    header("Location: index.php");
}

if(isset($_GET['type']) && $_GET['type']=="edit"){
    $db->updateData($_POST['nick'], $_POST['firstName'], $_POST['lastName'], $_POST['email']);
    $res = $db->getUserData($_POST['nick']);
    echo json_encode($res);
}

if(isset($_GET['type']) && $_GET['type']=="new_user"){
    $code = $validete->generateCodeActivate(5);

    if($res = $db->insertUser($_POST['nick'], $_POST['password'], $_POST['email'], $code)){
        $_SESSION['status'] = "ok";
        $_SESSION['code'] = $code;
        mail($_POST['email'], 'subj' ,$code);
    }
    else
        $_SESSION['status'] = "error";
    echo json_encode($code);
}

if(isset($_GET['type']) && $_GET['type']=="equil_code"){
    $correctCode = $db->getCodeActivate($_POST['nick']);
    if ($correctCode == $_POST['code']){
        $res = true;
        $db->setActiveteFlag($_POST['nick']);
    }
    else{
        $res = false;
    }
    echo json_encode($res);
}
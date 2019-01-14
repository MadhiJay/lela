<?php
session_start();
require_once('Functions/function.php');
if(isset($_COOKIE['logged-user'])){
    if(!isset($_SESSION['current_user_email'])){
        $_SESSION['current_user_email']=$_COOKIE['logged-user'];
    }
}
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
if ($request_uri[0]=='/design') {
    require 'ui/design.php';
}else{
    if (isset($_GET['logout'])) {
        logout();
    }else{
        if(isset($_POST['username'])){
            register();
        }else{
            login();
        }
    }
}
    


?>
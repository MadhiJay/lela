<?php
session_start();
require_once('Functions/function.php');
if(isset($_POST['username'])){
    register();
}else if($_POST['login-email']){

}else{
    require_once('ui/home.php');
}

?>
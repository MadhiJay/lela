<?php 
require_once('Connection/connection.php');
function login(){
    $email =$_POST['login-email'];
    if($_POST['remember']=='true'){
        setcookie('logged-user', $email, time() + (86400 * 30), "/");
    }
    if(isset($_POST['login-email']) && isset($_POST['psw']) ){
        $email =$_POST['login-email'];
        $password = $_POST['psw'];
        $pass_hashed = hashingPassword($password);
        $db = new DB();
        $conn = $db->connect();
        if(rememberMeCheck($db,$conn,$email)){
            $_SESSION['loggedin'] = true;
            $_SESSION['current_user_email']=$email;
            
        }else{
            if(CheckLoginDetails($db,$conn,$pass_hashed,$email)){
                $_SESSION['loggedin'] = true;
                $_SESSION['current_user_email']=$email;
                require 'ui/home.php';
               
            }else{
                $_POST['alert-message-login']='Invalid Credentials.';
                require 'ui/home.php';
            }
        }
        
        $db->disconnect($conn);
    }else{
       require 'ui/home.php';
    }  
    
}
function getUserName($email){
    $db = new DB();
    $conn = $db->connect();
    $user = $db->getOnlyOneColumnFromTable($conn,'email',$email,'username','user');
    $db->disconnect($conn);
    return $user['username'];
}

function CheckLoginDetails($db,$conn,$password,$email){
    $password_saved_in_db=$db->getOnlyOneColumnFromTable($conn,'email',$email,'pword','user');
    if($password_saved_in_db['pword']==$password){
        return true;
    }else{
        return false;
    }
}
function rememberMeCheck($db,$conn,$email){
    $user=$db->getOnlyOneColumnFromTable($conn,'email',$email,'logged_in','user');
    if($user['logged_in']=="true"){
        return true;
    }else{
        return false;
    }
}
function hashingPassword($pass){
    return md5(sha1($pass));
}
function signup(){
    $email =$_POST['email'];
    $pass =hashingPassword($_POST['pword']);
    $uname = $_POST['username'];
    $db = new DB();
    $conn = $db->connect();
    if(!checkEmail($db,$conn,$email)){
        $db->addUser($conn,$uname,$email,$pass);
        require_once('ui/home.php');
    }else{
        $_POST['alert-message'] = "That user already exists.";
        require_once('ui/home.php');
    }
    
    
    $db->disconnect($conn);
}
function checkEmail($db,$conn,$email){
    
    if($db->getOnlyOneColumnFromTable($conn,'email',$email,'email','user')==null){
        return false;
    }else{
        return true;
    }
 }
 function logout(){
    $_SESSION['loggedin'] = false;
    $_SESSION['current_user_email']=null;
    unset($_COOKIE['logged-user']);
    setcookie('logged-user','',time()-3600);
    require 'ui/home.php';
 }
?>
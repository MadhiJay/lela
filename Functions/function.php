<?php 
require_once('Connection/connection.php');
function login(){
    if(isset($_POST['login-email']) && isset($_POST['psw']) ){
        $email =$_POST['login-email'];
        $password = $_POST['psw'];
        $pass_hashed = hashingPassword($password);
        $db = new DB();
        $conn = $db->connect();
        if(check_remember_me_pressed($db,$conn,$email)){
            $_SESSION['loggedin'] = true;
            $_SESSION['current_user_email']=$email;
            
        }else{
            if(check_credentials_true($db,$conn,$pass_hashed,$email)){
                $_SESSION['loggedin'] = true;
                $_SESSION['current_user_email']=$email;
                require 'ui/home.php';
            }else{
                $_POST['alert-message-login']='Invalid Credentials.';
                require 'ui/home.php';
            }
        }
        if($_POST['remember']=='true'){
            //update db user with logged in
        }else{
            
        }  
        $db->disconnect($conn);
    }else{
       require 'ui/home.php';
    }  
    
}
function go_to_home(){
    
}
function get_user_full_name($email){
    $db = new DB();
    $conn = $db->connect();
    $user = $db->getOnlyOneColumnFromTable($conn,'email',$email,'fName,lName','user');
    $db->disconnect($conn);
    $name ='';
    foreach ($user as $key => $value) {
        $name .= $value." ";
    }
    return $name;
}
function check_credentials_true($db,$conn,$password,$email){
    $password_saved_in_db=$db->getOnlyOneColumnFromTable($conn,'email',$email,'password','user');
    if($password_saved_in_db['password']==$password){
        return true;
    }else{
        return false;
    }
}
function check_remember_me_pressed($db,$conn,$email){
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
function register(){
    $email =$_POST['email'];
    $pass =hashingPassword($_POST['pword']);
    $uname = $_POST['username'];
    $db = new DB();
    $conn = $db->connect();
    if(!check_email_already_exists($db,$conn,$email)){
        $db->addUser($conn,$uname,$email,$pass);
        require_once('ui/home.php');
    }else{
        $_POST['alert-message'] = "That user already exists.";
        require_once('ui/home.php');
    }
    
    
    $db->disconnect($conn);
}
function check_email_already_exists($db,$conn,$email){
    
    if($db->getOnlyOneColumnFromTable($conn,'email',$email,'email','user')==null){
        return false;
    }else{
        return true;
    }
 }
?>
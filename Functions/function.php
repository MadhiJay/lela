<?php 
function login(){
    if(isset($_POST['email']) && isset($_POST['pword']) ){
        $email =$_POST['email'];
        $password = $_POST['pword'];
        $pass_hashed = make_password_hashed($password);
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
                $_POST['alert-message']='Invalid Credentials.';
                require 'ui/login.php';
            }
        }
        if($_POST['remember']=='true'){
            //update db user with logged in
        }else{
            
        }  
        $db->disconnect($conn);
    }else{
       require 'ui/login.php';
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
function make_password_hashed($pass){
    return md5(sha1($pass));
}
function register(){
    if(!check_password_equility($_POST['pword'],$_POST['repword'])){
        $_POST['alert-message']='Passwords are not the same.please retype the passwords';
        require 'views/signup.php';
    }else{
        $db = new DB();
        $password_hashed=make_password_hashed($_POST['pword']);
        $conn = $db->connect();
        if(check_email_already_exists($db,$conn,$_POST['email'])){
            $_POST['alert-message']='That email already exixts please try another.';
            require 'ui/signup.php';
        }else{
            $db->addUser($conn,$_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['email'],$password_hashed,$_POST['dob'],$_POST['gender']);
        }
        $db->disconnect($conn);
    }
}
?>
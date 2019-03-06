<?php 

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
 function add_rooms(){
     $sql= "insert into Rent (email,category,place,noOfRooms,price,descrpt) values('".$_SESSION['current_user_email']."','".$_POST['type']."','".$_POST['location']."',1,'".$_POST['prc']."','".$_POST['desc']."')";
     $db= new DB();
     $db->set_data($db->connect(),$sql);
 }
 function view_rooms(){
     $sql ="select * from rent where email='".$_SESSION['current_user_email']."'";
     $db= new DB();
     $rooms=$db->get_data($db->connect(),$sql);
     while($room=mysqli_fetch_assoc($rooms)){
        echo "<tr><td>".$room['category']."</td><td>".$room['place']."</td><td>".$room['noOfRooms']."</td><td>".$room['price']."</td><td>".$room['descrpt']."</td><td>
        <a href='/ui/profile.php?deleteid=".$room['id']."' type='button' class='btn btn-danger'>Delete</a></td></tr>";
     }
 }
 function delete_room(){
     $sql = "delete from rent where id=".$_GET['deleteid'];
     $db= new DB();
     $db->set_data($db->connect(),$sql);
     echo '<meta http-equiv="refresh" content="0;URL=profile.php">';
 }
 function search_rooms(){
    $sql ="select * from rent where place like '%".$_GET['location']."%'";
    $db= new DB();
    $rooms=$db->get_data($db->connect(),$sql);
    while($room=mysqli_fetch_assoc($rooms)){
       echo "<tr><td>".$room['email']."</td><td>".$room['category']."</td><td>".$room['place']."</td><td>".$room['noOfRooms']."</td><td>".$room['price']."</td><td>".$room['descrpt']."</td><td>
       <a href='' type='button' class='btn btn-success'>Book</a></td></tr>";
    }
 }
?>
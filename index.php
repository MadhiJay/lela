<?php
session_start();
require_once('Functions/function.php');
require_once('Connection/connection.php');
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
            signup();
        }else{
            login();
        }
    }
}
     <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 


?>

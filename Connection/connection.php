<?php
define('SERVER','localhost:3306');
define('USER','user');
define('PASSWORD','123');
define('DATABASE','ingagedb');
class DB{
	function connect(){
		$conn = mysqli_connect(SERVER, USER, PASSWORD,DATABASE);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		return $conn;
	}	
	function disconnect($conn){
		mysqli_close($conn);
	}
	function addUser($conn,$fname,$lname,$uname,$email,$password,$dob,$gender){
		
		$sql="call NewUser('".$username."','".$email."')";
		if (mysqli_query($conn, $sql)) {
			$_POST['success-message']='You are registered successfully. Please Sign in with your credentials';
			require 'ui/login.php';
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	function getOnlyOneColumnFromTable($conn,$where,$equal,$column,$table){
		$sql="select ".$column." from ".$table." where ".$where."='".$equal."'";
		$result = mysqli_query($conn, $sql);
		$row =mysqli_fetch_assoc($result);
		return $row;
	}
}    
?>
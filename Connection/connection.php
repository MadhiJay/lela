<?php
define('SERVER','localhost:3306');
define('USER','user');
define('PASSWORD','123');
define('DATABASE','lela');
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
	function addUser($conn,$uname,$email,$password){
		
		$sql="call NewUser('".$uname."','".$email."','".$password."')";
		if (mysqli_query($conn, $sql)) {
			$_POST['success-message']='You are registered successfully. Please Sign in with your credentials';
			require 'ui/login.php';
		} else {
			$_POST['alert-message'] = "error ".mysqli_error($conn);
		}
	}
	function getOnlyOneColumnFromTable($conn,$where,$equal,$column,$table){
		$sql="select ".$column." from ".$table." where ".$where."='".$equal."'";
		$result = mysqli_query($conn, $sql);
		$row =mysqli_fetch_assoc($result);
		return $row;
	}
	function set_data($conn,$sql){
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function get_data($conn,$sql){
		return mysqli_query($conn, $sql);
	}
}    
?>
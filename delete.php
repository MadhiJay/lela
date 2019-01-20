
<!DOCTYPE html>
<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lela";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM rent WHERE email=".$_GET['email'];

if (mysqli_query($conn, $sql)== true) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
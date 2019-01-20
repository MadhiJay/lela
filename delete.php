
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

if (mysqli_query($conn, $sql)== true) {?>
    <script>alert("Record deleted successfully")
	</script>
	<a href="test.php">Back</a><?php
} else {?>
    <script>alert("Error deleting record: "<?php. mysqli_error($conn?>)</script>
	<a href="test.php">Back</a><?php
}

mysqli_close($conn);
?>
</body>
</html>
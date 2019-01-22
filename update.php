<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lela";

$email = $_GET['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

        $sql = "SELECT * FROM rent WHERE email=".$email;
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc ($result)):

        ?>

        <form action ="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data"><table><tr><td>
           email</td><td>
            <input type="text" name="email" value="<?php echo $row ['email']; ?> " id="email" size=100></td><tr><br><td>
            category</td><td>
            <input type="text" name="categorynew" value="<?php echo $row ['category']; ?> " id="categorynew" size=100></td><tr><br><td>
            place</td><td>
            <input type="text" name="placenew" value="<?php echo $row ['place']; ?>" id="placenew" size=100></td><tr><br><td>
			noOfRooms</td><td>
            <input type="text" name="noOfRoomsnew" value="<?php echo $row ['noOfRooms']; ?>" id="noOfRoomsnew" size=100></td><tr><br><td>
			price</td><td>
            <input type="text" name="pricenew" value="<?php echo $row ['price']; ?>" id="pricenew" size=100></td><tr><br><td>
			description</td><td>
            <input type="text" name="descrptnew" value="<?php echo $row ['descrpt']; ?>" id="descrptnew" size=100></td><tr><br><td>
			contact</td><td>
            <input type="text" name="contactnew" value="<?php echo $row ['contact']; ?>" id="contactnew" size=100></td><tr><br><td>
			image</td><td>
			<img src="images/<?php echo $row ['img'];?>" width="460" height="345" name="imgnew" id="imgnew"></td><tr><br><td>
			Select images: </td><td>
			<input type="file" name="imagenew" id="imagenew"></td><tr colspan="2"><td>
			<input type="submit" name="submit" value="Update"></td></tr></table>
        </form>
      

<?php endwhile;

mysqli_close($conn);
?>

 <?php
         if(isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lela";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}
$contact="";
$category="";
$email="";
$place="";
$noOfRooms=0;
$price="";
$descrpt="";
if (isset($_POST['email'])) 
{ $email=$_POST['email'];

} 
if (isset($_POST['categorynew'])) 
{ $category=$_POST['categorynew'];

} if (isset($_POST['placenew'])) 
{$place=$_POST['placenew'];

} if (isset($_POST['noOfRoomsnew'])) 
{ $noOfRooms=$_POST['noOfRoomsnew'];

}  if (isset($_POST['pricenew'])) 
{ $price=$_POST['pricenew'];

}  if (isset($_POST['descrptnew'])) 
{ $descrpt=$_POST['descrptnew'];}
 
 if (isset($_POST['contactnew'])) 
{ $contact=$_POST['contactnew'];} 

$file_name="";
$file_size=0;

 if (isset($_FILES['imagenew']['size'])) 
{ $file_name = $_FILES['imagenew']['name'];}

 if (isset($_FILES['imagenew']['name'])) 
{ $file_size =$_FILES['imagenew']['size'];}


 if (isset($_FILES['imagenew']['tmp_name'])) 
{ $file_tmp =$_FILES['imagenew']['tmp_name'];}

  if (isset($_FILES['imagenew']['type'])){
	  $file_type=$_FILES['imagenew']['type'];
  };

$file_arr = explode('.', $file_name);
$file_ext=strtolower(end($file_arr));

$extensions= array("jpeg","jpg","png");

 if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 }

 if($file_size > 2097152){
     $errors[]='File size must be excately 2 MB';
 }

 if(empty($errors)==true){
     move_uploaded_file($file_tmp,"../images/".$file_name);
     echo "Success";
 }else{
     print_r($errors);
 }

 $sql = "UPDATE rent SET category = '".$category."', place = '".$place."', noOfRooms = '".$noOfRooms."', price = '".$price."', descrpt = '".$descrpt."', contact = '".$contact."', img ='".$file_name."' where email= '".$email."'";


$retval = mysqli_query($conn, $sql);

if(! $retval ) {
   die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";

mysqli_close($conn);
		 }?>

<script>
    $("#imagenew").change(function(){
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgnew').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>


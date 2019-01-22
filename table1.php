<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<link rel="stylesheet" type="text/css" href="css/nav.css">
<style type="text/css">
	body
	{
		background-color:#54cef1;
	}

	#slideshow
	{ 
		
		width: 100%;
		height: 600px;
		border: 3px solid purple;
	}
	#slideshow div img{
		
		width: 100%;
		height: 500px;
		
	}
	
	
	
	
	#slideshow{
		position: relative;
		width:100%
		margin-top:20px;

	}
	#slideshow div{
		position: absolute;
		z-index: 3px;
		width: 100%;
		margin-top: 50px;
	
		
	}



</style>
<body>



		
	<div id="slideshow">
		
		<div><img src="images/loc/1.jpg"></div>
		<div><img src="images/loc/2.jpg"></div>
		<div><img src="images/loc/3.jpg"></div>
		<div><img src="images/loc/4.jpg"></div>
		<div><img src="images/loc/5.jpg"></div>
		<div><img src="images/loc/6.jpg"></div>
		<div><img src="images/loc/7.jpg"></div>
		<div><img src="images/loc/8.jpg"></div>
		<div><img src="images/loc/9.jpg"></div>
		<div><img src="images/loc/10.jpg"></div>
		<div><img src="images/loc/11.jpg"></div>
		<div><img src="images/loc/12.jpg"></div>
		<div><img src="images/loc/13.jpg"></div>
		<div><img src="images/loc/14.jpg"></div>
		<div><img src="images/loc/15.jpg"></div>
		<div><img src="images/loc/16.jpg"></div>
		<div><img src="images/loc/17.jpg"></div>
		<div><img src="images/loc/18.jpg"></div>
		<div><img src="images/loc/19.jpg"></div>
		<div><img src="images/loc/20.jpg"></div>
		<div><img src="images/loc/21.jpg"></div>
		<div><img src="images/loc/22.jpg"></div>
		
	</div><br><br><br>
	

	
	<?php  

	$student =GetAllStudentsIDName($conn);
	
?>


		
	











<fieldset>
	<legend align="center"><h1 id="txt">Rent Types</h1></legend>
	<h3 align="right"><a href="Form.php">Add</a></h3>
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>View</th>
		
	</tr>
	<tbody>
	<?php  
		
		foreach ($student as $key => $value) {
			echo "<tr>";
			echo "<td>".$value['RentType']."</td>";
			echo "<td>".$value['Location']."</td>";
			$studentId=$value['RentType'];
			echo"<td><a href='tem/about.php?studentid=$studentId'>View</a></td>";
			
			echo"</tr>";

		}
	?>
	</tbody>
</table>

</fieldset>
	
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(3000)
    .next()
    .fadeIn(1500)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
</html>

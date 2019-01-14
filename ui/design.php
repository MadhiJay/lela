<!DOCTYPE html>
<html>
<head>
	<title>Our Services</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/home-page.css">
  <link rel="stylesheet" href="styles/map.css">
  <link rel="stylesheet" href="styles/footer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png">
	<style>

	
.main{
			background-image:url("../images/img2.jpg"); 
			/*min-height: 100%;*/
			background-position:cover;
			background-repeat: no-repeat;
			background-size: 100%;
			opacity: 0.7;

			filter:alpha(opacity = 20);

			/*position: relative;*/
			border-radius: 15px;
	}
	
	.points{
			margin-left: 20px;
			margin-right:20px: 
			font-size:40px;

}

	h1{
		color:white;
		font-size: 50px;
	}
	
	table{
			padding-top: 20%;
			padding-bottom: 20%;
			padding-right: 25%;
			padding-left: 20%;
			/*padding-position: center;*/
			
	}
	.container{
		
	padding-position: center;
	color: white;
	font-size: 20px;
	}



	*{
		box-sizing: border-box;
	}
	textarea {
		resize: vertical;
		border-radius: 5px;
		height: 100px;
		opacity: 0.7;
		filter:alpha(opacity = 20);
	}
	input[type = Submit]{
		background-color: white;
		color: red;
		padding: 12px 20px;
		font-size: 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;


	}
	input[type = text]{
		opacity: 0.7;
		filter:alpha(opacity = 20);
	}
	input[type=Submit]:hover{
		background-color: green;
		opacity: 0.7;
		filter:alpha(opacity = 20);
	}
	</style>
	
</head>
<body>
<?php 
  require_once('ui/navigation.php');
  ?>




<div class="main">
	
<form method="POST" action="connection.php" class="container">
	
	<table >

		 <tr>
			<td ><h1>Rooms Reservations</h1></td>
		</tr> 
		<tr>
		<th class="points" rowspan="1">Type :</th>
		<td><select >
			<optgroup label="Single">
				<option value="Ac">Ac</option>
				<option value="NonAc">Non-Ac</option>

			</optgroup>
			<optgroup label="Family">
				<option value="Ac">Ac</option>
				<option value="NonAc">Non-Ac</option>

			</optgroup>
			</select><br><br>
		
	
		</tr>
		
		<tr>
			<th class="points">Location :</th>
			<td><select >
			<option>Diyathalawa</option>
			<option>Bandaravela</option>
			<option>Badulla</option>
			<option>Liptonseat</option>
			<option>Umaoya Tank</option>
			</select><br><br>
			</td>
		</tr>
		<tr>
			<th class="points">Price :</th>
			<td><input type="text" name="prc"><br><br></td>
		</tr>
		<tr>
			<th class="points">Discription </th>
			<td><textarea id="Discription"  ></textarea><br></td>
		</tr>
		<tr>
			
			<td  align="center"><b><input type="Submit" value="Submit"></b></td>
		</tr>
		
	</table>
	
</form>
</div>
</body>
</html>
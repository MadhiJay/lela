<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project Lela</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/home-page.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LELA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Become a host<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li class="dropdown-header">HOMES</li>
        <li><a href="#"> List Your Place </a></li>
        
        <li class="divider"></li>
        <li class="dropdown-header">Rooms</li>
        <li><a href="#">List Your Rooms</a></li>
    </ul>
      </li>
      <li><a href="#">Locations around Ella</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-user" ></span>Sign Up</a></li>
      <li><a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/hike.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/hike2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/waterfall.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/train2.jpg" style="width:100%">
  <div class="text"></div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div id="id01" class="modal">
 
  <form class="modal-content" action="/action_page.php">
    <div class="container">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <label for="psw-repeat"><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar.png" alt="Avatar" class="avatar">
      
    </div>
<br>
    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>

      <button type="submit" class="signupbtn">Login</button><br>
      
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <br>
      <span class="psw">Forgot <a href="#">password?</a></span>

    </div>

  </form>
</div>

<div class="container" style="background-color:darkgray">
<h1 style="align:center;">Top destinations for Ella trips</h1>
<h2 style="align:center;">Pick your point of interest and find a hotel nearby</h2>
<div class="accordian">
    <ul>
		<li>
			<div class="image_title">
				<a href="#">Nine arch bridge</a>
			</div> 
			<a href="#">
				<img src="images/Trips/9arch.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Bomburu Ella</a>
			</div>
			<a href="#">
				<img src="images/Trips/bomburuella.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Ella Rock</a>
			</div>
			<a href="#">
				<img src="images/Trips/ellarock.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Diyamula Falls</a>
			</div>
			<a href="#">
				<img src="images/Trips/diyaluma.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#">Lipton's Seat</a>
			</div>
			<a href="#">
				<img src="images/Trips/liptonsseat.jpg"/>
			</a>
		</li>
	</ul>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() 
{
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 10 seconds
}

function signupModal(){
  // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function loginModal()
{
  // Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}

</script>





</body>
</html>
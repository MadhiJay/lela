<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lela</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/home-page.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png">
  </head>
  <body style="background-color:black;">

  <?php 
  require_once('ui/navigation.php');
  ?>
  
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4
    </div>
    <img src="images/hike.jpg" style="width:100%">
    <div class="text"><a class="btn btn-lg btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"role="button">Search your accomadation</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images/hike2.jpg" style="width:100%">
    <div class="text"><a class="btn btn-lg btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"role="button">Search your accomadation</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="images/waterfall.jpg" style="width:100%">
    <div class="text"><a class="btn btn-lg btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"role="button">Search your accomadation</a></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/train2.jpg" style="width:100%">
    <div class="text"><a class="btn btn-lg btn-primary" href="#" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"role="button">Search your accomadation</a></div>
  </div>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

  <?php 
  require_once('ui/login.php');
  require_once('ui/signup.php');
  require_once('ui/SearchModal.php');
  ?>
    
  <div style="background-color:#000000">
  <h1 align="center"  style="padding: 20px 20px 0px 20px;color: white">Top destinations for Ella trips</h1>
  <h2 align="center" style="color:gray;">Pick your point of interest and find a hotel nearby</h2>
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
          <a href="#">Little Adam's Peak</a>
        </div>
        <a href="#">
          <img src="images/Trips/littleadamspeak.jpg"/>
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="#">Ravana Ella</a>
        </div>
        <a href="#">
          <img src="images/Trips/ravanaella.jpg"/>
        </a>
      </li>
    </ul>
  </div>
  </div>


  


  <script>
  var slideIndex = 0;
  showSlides();
  signupModal();
  loginModal();

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
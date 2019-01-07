<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Home --> 
  <a class="navbar-brand" href="#">Home</a>

  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Accomandation
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Deluxe Room</a>
        <a class="dropdown-item" href="#">Bawa Room</a>
        <a class="dropdown-item" href="#">Family Deluxe Room</a>
        <a class="dropdown-item" href="#">Deluxe Suite</a>
        <a class="dropdown-item" href="#">Bawa Suite</a>
      </div>
    </li>
    <!-- Links -->
    <li class="nav-item">
      <a class="nav-link" href="#">Facilities & Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Locations</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
  </ul>
  <button class="btn btn-danger navbar-btn">Book now</button>
</nav>


<div class="container text-left" style= "display:flex">
  <div class="page-header">
  <img src="images/logolela.png" width=200px height=200px margin=0px>     
  </div> 
  <div>
  <p class="font-weight-light" 
  style="font-size:50px;color:Blue;padding:100px 100px 100px 0px;">HOTEL LELA</p>
  </div> 
</div>

<div class="rows" style= "display:flex">
  <div class="col-6"  style="background-color:lightblue">
  <h3 style="color:white;padding:10px">Select dates to see our prices:</h3> 
  <form>
    <div class="md-form">
    <label for="Checkin">Check-In</label>
    <input placeholder="Selected date" type="text" id="indate" class="form-control datepicker">
    </div>
  </form>
  </div> 
  <div>
  
  </div> 
</div>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>  

  

</body>
</html>
<nav class="navbar navbar-inverse">
    
  <div class="container-fluid">
        <div class="navbar-header">   
        <img src="images/logo.png" width="50" height="50" alt="">
        <a class="navbar-brand" href="index.php">LELA</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Become a host<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li class="dropdown-header">HOMES</li>
            <li><a href="#"> List Your Place </a></li>

            <li class="divider"></li>
            <li class="dropdown-header">Rooms only</li>
            <?php
            if(!isset($_SESSION['current_user_email']))
            {
                echo "<li><a href=\"#\" onclick=\"document.getElementById('id02').style.display='block'\">
                 List Your Rooms</a></li>";
            }else
            {
                echo " <li><a href=\"/design\">List Your Rooms</a></li>";
            }
            ?>
           
        </ul>
        </li>
        <li><a href="location.html">Locations around Ella</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php 
        if(isset($_SESSION['current_user_email'])){
            echo " <li><a href=\"#\"  style=\"width:auto;\"> Welcome &nbsp;".getUserName($_SESSION['current_user_email'])."!</a>
            
        </li>
        <li><a href=\"../index.php?logout=yes\"  style=\"width:auto;\">
                <span class=\"glyphicon glyphicon-log-in\"></span> Logout
            </a>
        </li>
        </ul>";
        
        }else{
            echo " <li><a href=\"#\" onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">
            <span class=\"glyphicon glyphicon-user\" ></span>Sign Up
            </a>
        </li>
        <li><a href=\"#\" onclick=\"document.getElementById('id02').style.display='block'\" style=\"width:auto;\">
                <span class=\"glyphicon glyphicon-log-in\"></span> Login
            </a>
        </li>
        </ul>";
        }
       
        ?>
  </div>
</nav>
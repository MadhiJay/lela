<?php

include "../Connection/connection.php";

$output = '';

if(isset($_POST['search'])) {
  $search = $_POST['search'];
  $search = preg_replace("#[^0-9a-z]i#","", $search);

  $query = "select * from rent WHERE place=".$_POST['location'];
  $result =mysqli_query();
  $count = mysqli_num_rows($query);
  
  if($count == 0){
    $output = "There was no search results!";

  }else
  {

  }
  ?>
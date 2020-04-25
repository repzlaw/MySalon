<?php
include "conn.php";

if(isset($_GET["rating"], $_GET["id"])){
  $index = $_GET['rating'];
  $business_id = $_GET['id'];
  $query = "INSERT INTO rating(business_id, rating) VALUES ('$business_id', '$index')";
  $result = mysqli_query($conn, $query);
  if(isset($result)){
    echo "done";
  }

}


 ?>

<?php
include "conn.php";

$query = "SELECT * FROM business ORDER BY id DESC";
$result = mysqli_query($conn, $query);
$output = "";
foreach ($result as $row) {
  $rating = count_rating($row["id"]);
  $color = '';
  $output .= '
  <div class="col-md-3" style="box-shadow:0px 1px 5px #0ec156; border-radius: 2px 2px 5px 5px; padding-bottom: 30px;" data-rating="'.$rating.'">

  ';
  if( base64_encode($row["image"]) == null){
    $output .= "<img class = 'img-responsive' src = 'images/logo-here.png'>";
  }else{
    $output .= '<img class = "img-responsive" width = "400" height = "400" src = "data:image/jpeg;base64,'.base64_encode($row["image"]).' ">';
    $output .= '
    <form role = "form" method="post" action = "book.php">

    <input type ="text" style="margin-top:20px; width:100%;" value = "'.$row['businessName'].'" disabled/>
    <span style="font-size:16px;">'.$row['address'].'</span><br>
    <input type ="hidden" style="margin-top:20px; width:100%;" name = "business_name" value = "'.$row['businessName'].'" />
    ';
}
  for($count=1; $count <= 5; $count++){
    if($count <= $rating)
    {
      $color = 'color: #ffcc00;';
    }else{
      $color = 'color: #333;';
    }
    $output .=
      '<span title = "'.$count.'" id = "'.$row['id'].'-'.$count.'" data-index = "'.$count.'" data-business_id = "'.$row['id'].'"
      data-rating = "'.$rating.'" class = "rating" style = "cursor:pointer; '.$color.' font-size:28px;">&#9733;</span>';
  }
  $output .= '
        <br>
        <button role="button" type="submit" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</button>
        </form>
    </div>
  ';
}
echo $output;

function count_rating($business_id){
  require "conn.php";
  $output = 0;
  $query = "SELECT AVG(rating) as rating FROM rating WHERE business_id = '".$business_id."'";
  $result = mysqli_query($conn, $query);
  $total_row = mysqli_num_rows($result);
  if($total_row > 0){
    foreach ($result as $row) {
      $output = round($row["rating"]);

    }
  }
  return $output;
}

 ?>

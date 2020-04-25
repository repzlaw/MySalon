<?php
$conn = mysqli_connect("localhost", "root", "");
$db_select = mysqli_select_db($conn, "login");
if(!$db_select){
    echo "Database selection failed :" . mysql_error();
    }


?>

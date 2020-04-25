 
<?php session_start(); 

?>


<?php

    $con = mysqli_connect("localhost", "root", "");  
    $db_select = mysqli_select_db($con, "login");
    if(!$db_select){
        echo "Database selection failed :" . mysql_error();
        }
	
	if (isset($_POST['submit'])) {

        $business_name= $_POST['business_name'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone_number = $_POST['phone_number'];


    $business_name = mysqli_real_escape_string( $con,$business_name);
    $service = mysqli_real_escape_string( $con,$service);
    $date = mysqli_real_escape_string( $con,$date);
    $time = mysqli_real_escape_string( $con,$time);
    $phone_number = mysqli_real_escape_string( $con,$phone);


    mysqli_query($con, "INSERT INTO book(name, service, date_booked, time_booked, phone) 
			VALUES('$business_name','$service','$date', '$time','$phone_number')";


}







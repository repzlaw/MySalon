
<?php session_start(); 

?>


<?php

    $con = mysqli_connect("localhost", "root", "");  
    $db_select = mysqli_select_db($con, "login");
    if(!$db_select){
        echo "Database selection failed :" . mysql_error();
        }
	
	if (isset($_POST['submit'])) {

        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];


    $fname = mysqli_real_escape_string( $con,$fname);
    $lname = mysqli_real_escape_string( $con,$lname);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $cpassword = mysqli_real_escape_string( $con,$cpassword);


    $query = "INSERT INTO register(fname, lname, email, password, cpassword) 
			VALUES('$fname','$lname','$email', '$password','$cpassword');";
            
            if ($password !== $cpassword) {
               echo "<script>window.alert('your passwords do not match')</script>";
               echo "<script>document.location='signup.php'</script>";
            }else{
		

			if (mysqli_query($con, $query)) {
			echo "<script>window.alert('Registration is Successfull!!!')</script>";
            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}/*end of insert statement for salon*/

}
?>
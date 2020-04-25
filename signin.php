<?php 
    session_start();
    include "conn.php"; 

?>


<?php

  
        
            $email = $_POST['email'];
            $password = $_POST['password'];
        
        // to prevent SQL injection
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $password=mysqli_real_escape_string($conn, $_POST['password']);

      
            $fetch=mysqli_query($conn, "select * from register where email='$email' and password= '$password'");
            $row = mysqli_fetch_array($fetch);
             $_SESSION['id']=$row['id'];
            $count=mysqli_num_rows($fetch);
        if($count!="")
        {

               echo "<script>alert('Login succesfull'?>);</script>";
               echo "<script>document.location='home.php'</script>";

        }else
        {

            echo "<script>alert('Wrong username/password combination');</script>";
            echo "<script>document.location='login.php'</script>";   
        }

            
            
?>
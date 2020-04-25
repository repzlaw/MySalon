<?php
    session_start();
    include "conn.php";
    include "createBusiness.php";

    if(!isset($_POST["search"])){
    	header("location:home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Your Next Salon Appointment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="startup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-default" style="background-color: white">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                 data-target="#navbar-collapse">
                    <span class="sr-only"> Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>

                 <div class="logo">
                    <a href="home.php">
                     <img src="images/lily.jpg" alt="Lily" class="img-circle"  style="height: 70px; width: 70px;   margin-left: -80px;"></a>
                 </div>

                </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav pull-right" id="Blog">
                    <li><a href="bussiness.php">List Your Bussiness</a></li>
                    <li><a href="blog.php">Blog</a></li>

                    <li><a href="logout.php">Log Out</a></li>

                        <li><a href="#", style="color: blue;">
                    <?php
                        $id = $_SESSION['id'];
                        $fetch=mysqli_query($conn, "select * from register where id='$id'");
                         $row = mysqli_fetch_array($fetch);
                         $username=$row['fname'];

                         echo $username;


                    ?>




                    </a></li>
                </ul>

            </div>
        </div>
    </nav>


      <br><br><br><br><br>

    <div class="container">
        <div class="row">
        <?php 
        include "res/recommend.php";

        ?>

  	  </div>
   

    </div>

   
    <footer>&copy;  IbitoyeDavid 2018 </footer>

</html>
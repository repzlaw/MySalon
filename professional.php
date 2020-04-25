
<?php
    session_start();
    include "conn.php";
    include "createBusiness.php";
    // include "insert.php";
    //echo $_SESSION['id'];
    //var_dump($_SESSION);
    if(isset($_POST['submit'])){
        addBusiness();

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Your Next Salon Appointment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="startup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function(){
          load_business_rating();
          function load_business_rating(){
              $.ajax({
                url :"res/fetch.php",
                method : "POST",
                success: function(data){
                  $(".row").html(data);
                }
              });
          }
          $(document).on('mouseenter', '.rating', function(){
            var index =$(this).data('index');
            var business_id = $(this).data('business_id');
            remove_background(business_id);
            for(var count = 1; count <=index; count++){
              $('#'+business_id+'-'+count).css('color', '#ffcc00');
            }
          });

          function remove_background(business_id){
            for(var count = 1; count<=5; count++){
              $('#'+business_id+'-'+count).css('color', '#ccc');
            }
          }
          $(document).on('click', '.rating', function(){
            var index = $(this).data('index');
            var business_id = $(this).data('business_id');

            $.ajax({
              url : "res/insert_rating.php",
              method : "GET",
              data : {rating: index, id: business_id},
              success: function(data){
                if(data == "done"){
                  // load_business_rating();
                  alert("You rated "+index+" of 5");

                }else{
                  alert(data);
                }

              }
            });
          });

        });

    </script>

</head>
<style type="text/css">
.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}
</style>
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

    </div>

    </div>

   




    <footer>&copy;  IbitoyeDavid 2018 </footer>

</body>
</html>

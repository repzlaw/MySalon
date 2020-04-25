<?php
	session_start();
	include "conn.php";
	include "createBusiness.php";
	//echo $_SESSION['id'];
	//var_dump($_SESSION);
	if(isset($_POST['submit'])){
		getImageSizi();

	}

?>


<!DOCTYPE html>
<html style="margin-top: 60px;">
<head>
	<title>Book Your Next Salon Appointment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="startup.css">
</head>
<body>


<script type="text/javascript">

</script>

<nav class="navbar navbar-fixed-top navbar-default">
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
					<li><a href="home.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>


					<li><a href="Professional.php">Professionals </a></li>

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
		<div class="container" >
			<div>
						</br></br></br><h3 style="font-size: 25px; text-align: center;"> Tell us about your bussiness</h3>
					<h5 style="margin-left:40px; font-size: 16px; text-align: center;"> Help us finish your account details</h5>
					<br><br>

				<div class="form-group container col-sm-offset-2">
				<div id= "imageHelp"> </div>
				<form method="POST" enctype="multipart/form-data">
												<div class="col-sm-4">
											<label>Bussiness Name</label>
											<input type="text" name="business_name" class="form-control" style="height: 50px;"  placeholder="Bussiness Name"> </div>
												<div class="col-sm-4">
												<label>Bussiness Phone</label><input type="text" name="business_phone" class="form-control" style="height: 50px;" placeholder="Bussiness Phone">
												</div>
												</div>
												<br>
									<div class="form-group container col-sm-offset-2">

												<div class="col-sm-8">
												<label>Bussiness Address</label><input type="text" name="business_add" class="form-control" style="height: 50px;" placeholder="Bussiness Address">
												</div>
												</div>
												<br>
												<label>Upload Image</label>
												 <input type="file" class = "form-control" name="image" value="" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"></span><br><br>
								<div>
									<div class="form-group col-sm-2 col-sm-offset-2" style="width: 950px; border-radius: 10px; height: 1000px; background-image: url(images/a1.jpg); background-size:cover;" >
									 	<h3>Select Services Offered</h3><hr><br>
		 								<input type="checkbox" name="Barber_Services" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;">Barber Services</span><br><br>
					 					 <input type="checkbox" name="Hair_Color" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Hair Color and Other (Hair Color with haircuts and styles)<br><br>

					 					 <input type="checkbox"  name="braid_twist" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Braids and Twists<br><br>

					 					 <input type="checkbox" name="extensions_weaving" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Extensions and Weaving<br><br>


					 					 <input type="checkbox" name="hair_replace" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Hair Replacement (Hair Replacement, Hair systems, and consultation)<br><br>
					 					 <input type="checkbox" name="hair_topup" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Hair Touch-up and Other (Hair Touch-up with haircuts and styles)<br><br>

					 					 <input type="checkbox" name="skincare" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Skincare (Facials and peels)<br><br>
					 					 <input type="checkbox" name="nail_care" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;"> Nail Care (Manicure, Pedicure, Artificial)<br><br>
					 					 <input type="checkbox" name="makeup" value="1" style="height: 20px; width: 20px;"> <span style="font-size: 20px;">Makeup (Different Makeup applications, Eyelash extensions)<br><br>
					 					<br><br>
					 					 <input href="Professional.php" type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px;" value="Finish"><br>
			</form>



			</div>
		</div>
		<div>
	<div class="form-group container" style="margin-top: 900px; margin-left:0px;">
	<footer style="margin-top: 110px;">&copy;  IbitoyeDavid 2018 </footer>
	</div>
	</div>


</body>
</html>

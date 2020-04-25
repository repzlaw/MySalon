
<?php
	session_start();
	include "conn.php";
	include "createBusiness.php";
	//echo $_SESSION['id'];
	//var_dump($_SESSION);
	if(!isset($_POST["business_name"])){
		header("location: professional.php");
	}
	if(isset($_POST['submit'])){
		addBusiness();
	}
	if(isset($_POST["book_btn"])) {
		$bus_name = $_POST["business_name"];
		$service = $_POST["service"];
		$date = $_POST["date"];
		$time = $_POST["time"];
		$id = $_SESSION["id"];

		$fetch=mysqli_query($conn, "select * from register where id='$id'");
			 $row = mysqli_fetch_array($fetch);
			 $fname=$row['fname'];
			 $lname=$row['lname'];
			 $emailCus = $row['email'];

		$fetch=mysqli_query($conn, "select * from business where businessName='$bus_name'");
			 $row = mysqli_fetch_array($fetch);
			 $email=$row['email'];

$to = $email;
$subject = "No Reply";
$txt = 'Hello, '.$bus_name.' your '.$service.' service has just been booked by '.$fname.' '.$lname.' for '.$time.' on '.$date.' you may reach the customer through this number '.$phone.' Thanks.';
$headers = "From: webmaster@example.com";

 mail($to,$subject,$txt,$headers);

?>
<script>
	alert("Booked Successfully...Salon owner has been notified");
	window.open('professional.php', '_self')
</script>
<?php
	//header("location:index.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Your Next Salon Appointment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="">
	<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(7.80,6.74),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

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
	<br><br><br><br><br><br><br><br>
	<div class="cover" >
		<div class="cover-text">
			<h1 style="color: red; text-align: center;"> Book Appointment</h1><br>
			<p></p>

						<div class="form-group" style="margin-left: 100px;">
							<form method="post" action="professional.php">

					<div class="form-group col-sm-4">
											<input type="text" name="business_name" value = "<?php echo $_POST["business_name"]; ?>" class="form-control" style="height: 50px; text-transform: uppercase;"  placeholder="Business Name" readonly>
				</div>
				<div class="form-group col-sm-4">

					<SELECT class="form-control" name = "service" style="height: 50px; text-transform: uppercase;" placeholder="Service" required>

											<option>Barber Services</option>
											<option>Hair Color </option>
											<option>Braids and Twists</option>
											<option>Extensions and Weaving</option>
											<option>Hair Replacement</option>
											<option>Hair Touch-up </option>
											<option>Skincare</option>
											<option>Makeup</option>
											<option>Nail Care</option>
						
					</SELECT>


				</div>
				<div class="form-group col-sm-3">

							<input type="date" name="date" class="form-control" style="height: 50px;text-transform: uppercase;"  placeholder="Date" required>

				</div>
			

				<div class="form-group col-sm-4">

							<input type="time" name="time" class="form-control" style="height: 50px;" placeholder="time"  required><br>

				</div>

				<div class="form-group col-sm-4">

							<input type="number" name="phone_number" class="form-control" style="height: 50px;" placeholder="phone number"  required><br>

				</div>



			<button type="submit" name = "book_btn" role="button" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</button>
	</form>

			</div>
				
		</div>
		</div>

	</div>


	<div id="googleMap" style="width:100%;height:480px"></div>
</body>


</html>


<?php
	session_start();
	include "conn.php"; 
	include "createBusiness.php";
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
	 <div class="cover" >
		<div class="cover-text">
			<h1>Search For Salon To Book Appointment</h1><br>
			<p></p>
			
			 			<div class="form-group">
			<div>
			<div class="form-group col-sm-4">
				<form method="post" role= "form" action="recommendation.php">
		
							<SELECT class="form-control" name="search" style="height: 50px;" placeholder="Service"> 
					<option>Barber Services</option>
					<!-- <option>Hair Color</option> -->
					<option>Braids and Twists</option>
					<option>Extensions and Weaving</option>
					<option>Hair Replacement</option>
					<option>Hair Touch-up and Other</option>	
					<option>Skincare</option>
					<option>Nail Care</option>
					<option>Makeup</option>
					</SELECT>
				</div>
			</div>
			<div>
				<div class="form-group col-sm-4">
							<input type="Date" name="bla" class="form-control" style="height: 50px;"  placeholder="Date">
				</div>
			</div>
			<div>
				<div class="form-group col-sm-4">
							<input type="Time" name="bla" class="form-control" style="height: 50px;" placeholder="Time"  ><br>
				</div>
			</div>
 
				<button type="submit" class="btn btn-danger btn-lg" style="width: 180px;">Search</button>

			</form>
			
		</div>
		</div>
		
	</div>
	
	
	<section id="why-us">
		<h2 style="color: red; font-family: Georgia,Times, serif;">Beauty Blog</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Caring For Your Hair</h3>
					<p>Hair care is essential for healthy and good hair. There are various ways in which to take care of your hair. wash your hair with hair shampoo and water but dont wash too frequently. wash your hair every 2-3 days, for proper regulation of natural hair oils. washing your hair less often also help regain your hairs natural body luster. also apply hair oils such as olive oil to avoid hair dryness so as to give your a good looking and healthy hair.</p>
				</div>
				<div class="col-sm-4">
					<h3>Home Remedy For Dandruff</h3>
					<p>Dandruff may be the result of dry scalp, or a skin condition called seborrhic dermatitis. it could also be caused by eczema or an overgrowth of yeastlike fungus called malassezia. salt is very great for scrubbing out dandruff fakes as well aloevera with also doubles as a itch-fighter. Also garlic has antimicrobial properties which are prefect for eliminating dandruff causing bacteria.Lastly, an overnight olive oil soak is a folk remedy for curing dandruff. Make sure you wash your hair regularly and avoid dirts getting into your hair</p>
				</div>
				<div class="col-sm-4">
					<h3>Preventing Hair Loss</h3>
					<p>Including this wonderful herb in your hair care regimen can help stimulate hair growth and prevent hair fall by including this magical herb in your hair care regimen. prepare a mixture by adding turmeric powder in raw milk. if you have really dry hair, you can add some 2 tablespoons of honey to this solution. nowgently massage solution into your scalp and wash your hair with mild shampoo. for best results, try this remedy twice a week and enjoy the bliss of long shiny hair.</p><br/><br/><br/>
				</div>
				<h4 style="text-align: center;"><a href="blog.php" style="color: red;"> See More...</a></h4>
			</div>
		</div>
	</section>
	<section id="team">
		<div class="container">
			<h2>Popular In Lokoja</h2>
			<div class="row">
				<div class="col-sm-3">
					<img src="images/b1.jpg" alt="" class="img-circle" style="height: 200px; width: 200px;">
					<h4>olu top clippers</h4>
					<br>
          <span class="heading">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
					 <!-- <div>
               <a href="book.php" role="button" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</a>

           </div> -->

					
				</div>
				<div class="col-sm-3">
					<img src="images/b4.jpg" alt="" class="img-circle" style="height: 200px; width: 200px;">
					<h4>dave moore salon</h4>
					<br>
          <span class="heading">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
				<!-- 	 <div>
               <a href="book.php" role="button" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</a>

           </div> -->
					
				</div>
				<div class="col-sm-3">
					<img src="images/b5.jpg" alt="" class="img-circle" style="height: 200px; width: 200px;">
					<h4>ali cuts</h4>
					<br>
          <span class="heading">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
				<!-- 	 <div>
               <a href="book.php" role="button" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</a>

           </div> -->
					
				</div>
				<div class="col-sm-3">
					<img src="images/b6.jpg" alt="" class="img-circle" style="height: 200px; width: 200px;">
					<h4>outlook salon</h4>
					<br>
          <span class="heading">User Rating</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
				<!--  <div>
               <a href="book.php" role="button" class="btn btn-danger btn-lg" style="width: 180px;">BOOK</a>

           </div> -->	
				</div>
			</div>
		</div>
	</section>
	<section id="signup">
		<div class="container">
			<h2>Get our newsletter</h2>
			<p>We'll get back to you soon, thank you</p>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<form>
						<div class="input-group">
							<input type="text" class="form-control input-lg" placeholder="input your Email address here">
							<span class="input-group-btn">
								<button class="btn btn-warning btn-lg" type="button">Send it</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
		
	<footer>&copy;  IbitoyeDavid 2018 </footer>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>  
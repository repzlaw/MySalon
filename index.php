<!DOCTYPE html>
<html>
<head>
	<title>Book Your Next Salon Appointment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="startup.css">
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
				 	<a href="index.php">
				 	 <img src="images/lily.jpg" alt="Lily" class="img-circle"  style="height: 70px; width: 70px;   margin-left: -80px;"></a>
				 </div>

				</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav pull-right" id="Blog">


					<li><a href="signup.php">Sign Up</a></li>
				</ul>

			</div>
		</div>
	</nav>

	</br> </br> </br>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/bc.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/bb.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/ba.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/bd.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<div class="container" >
			<div>
				<br><br><h3 style="text-align: center;">Please Fill In Your Login Details</h3> <hr> <br> <br>


				<div class="form-group col-sm-4 col-sm-offset-4">
					<form action="signin.php" method="post">
							<label>Email Address</label><input type="text" name="email" class="form-control" style="height: 50px;"  placeholder="Email Address"><br>

							<label>Password</label><input type="password" name="password" class="form-control" style="height: 50px;" placeholder="Password">
							<input type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px;" value="Login">
					</form>
					<br><br>
					<h4>Dont have an account? please click <a href="signup.php" style="color: red;">here</a> to sign up</h4>
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

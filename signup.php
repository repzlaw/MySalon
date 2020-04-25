<!DOCTYPE html>
<html style="margin-top: 60px;">
<head>
	<title>Book Your Next Salon Appointment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="startup.css">
</head>
<body>

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
				 	<a href="index.php">
				 	 <img src="images/lily.jpg" alt="Lily" class="img-circle"  style="height: 70px; width: 70px;   margin-left: -80px;"></a>
				 </div>
				
				</div>
			
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav pull-right" id="Blog">
					<li><a href="index.php">Home</a></li>
					
					
					
					
				</ul>
			
			</div>
		</div>
	</nav>
		<div class="container" >
			<div>
				<br><br><h3 style="text-align: center;">Please Input Your Details Correctly</h3> <hr> <br> <br>
					

				<div class="form-group col-sm-4 col-sm-offset-4">
					<form action="register.php" method="post">

							<label>First Name</label><input type="text" name="fname" class="form-control" style="height: 50px;"  placeholder="First Name"><br>
							<label>Last Name</label><input type="text" name="lname" class="form-control" style="height: 50px;" placeholder="Last Name">
							<br>
							<label>Email Address</label><input type="email" name="email" class="form-control" style="height: 50px;" placeholder="Email Address">
							<br>
							<h6 style="text-align: center;">Choose a Strong Password</h6>
							<label>Password</label><input type="text" name="password" class="form-control" style="height: 50px;" placeholder="Password"><br>
							<label>Re-Enter Password</label><input type="text" name="cpassword" class="form-control" style="height: 50px;" placeholder="Password">
							<input type="submit" name="submit" class="btn btn-primary" style="margin-top: 20px;" value="Submit">
					</form>
				</div>
				
					
					
				
			</div>
		</div>
	<footer style="margin-top: 110px;">&copy;  IbitoyeDavid 2018 </footer>
</body>
</html>
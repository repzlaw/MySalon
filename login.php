<!DOCTYPE html>
<html style="margin-top: 100px; background-image: url(images/b1.jpg); background-size: cover;">
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
					<li><a href="bussiness.php">List Your Bussiness</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="Professional.php">Professionals </a></li>
					
				</ul>
			
			</div>
		</div>
	</nav>
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
	<footer style="margin-top: 100px;">&copy;  IbitoyeDavid 2018 </footer>
</body>
</html>
<?php
include"tester.php";
//test if username is alphanumeric
$test= $_POST['username'];
if (!eregi("([^A-Za-z0-9])", $test)){


//test for duplicate names
	$query= "SELECT * FROM game WHERE username = '$_POST[username]'";
	$result= mysql_query($query);
	$num= mysql_num_rows($result);

	if ($num==0) {

$dbc= mysql_connect("localhost","root","");
$db_selected= mysql_select_db("game",$dbc);
if (!$db_selected){
	die("cant conn". mysql_error());
}

$username=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$query ="INSERT INTO game(username, password, email) 
			VALUES('$username','$pass','$email');";
            
$result= mysql_query($query);

} 




	}

	else{
		die("username already exists ::: choose another username"); 
	}



}
}
else{
	die("invalid username::::::::your username must contain only numbers and alphabets"); 
}



?>
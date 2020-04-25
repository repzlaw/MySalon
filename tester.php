<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
// echo $_POST["name"];
// echo "todays date is   ";
// echo date("d-m-Y");

// $dbc = mysql_connect("localhost","root","");
// if (!$dbc){
// 	die('not connected' );
// }



// $db_selected = mysql_select_db("game",$dbc);
// if (!$db_selected)
// {
// die("cant connect". mysql_error());

// }

// // test
// $query = "UPDATE game SET email = 'davo@gmail' WHERE username= 'me'";
// $result= mysql_query($query);

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

$query2 = "DELETE FROM game WHERE username=''";
$result2= mysql_query($query2);


 ?>




</body>
</html>
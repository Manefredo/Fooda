<?php 
session_start();

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

$user = "root";
$password = "";
$database = "a8663810_users";

$connect = mysql_connect("mysql4.000webhost.com", "a8663810_nick", "nick12");
@mysql_select_db($database) or ("Database not found");


$query = "SELECT * FROM `users` WHERE `username` = '$inputuser'";
$querypass = "SELECT * FROM `users` WHERE `password` = '$inputpass'";


$result = mysql_query($query);
$resultpass = mysql_query($querypass);
if(!$result) die ('Unable to run query:'.mysql_error());



$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);


$serveruser = $row["username"];
$serverpass = $row["password"];



if($serveruser&&$serverpass)
{
	if(!$result)
	{
		die("Username or Password is invalid");
	}
	echo"<br><center>Database output</b></center>";
	mysql_close();


	if($inputpass == $serverpass && $inputuser == $serveruser)
	{
		$_SESSION['user'] = $serveruser;
		 header('Location: home.php');

	}
	else {
		header('Location: failed.php');
	}

}
mysql_close();
?>

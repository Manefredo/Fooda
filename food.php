<html>
<body>This is the food you have tried with a breif description</body>
<br><br>
</html>
<?php 
session_start();

$user = "root";
$password = "";
$database = "fooda";
$ID = $_SESSION['user'];

$database = "a8663810_users";

$connect = mysql_connect("mysql4.000webhost.com", "a8663810_nick", "nick12");
@mysql_select_db($database) or ("Database not found");

$query = "SELECT * FROM users WHERE username = '$ID'";

$result = mysql_query($query);
if(!$result) die ('Unable to run query:'.mysql_error());

// echo $user;
while($data = mysql_fetch_array($result))
{
	echo $data['food'];
}
?>
<html>
<title>fooda</title>
<br><br>
<form action="home.php">
<input type="submit" value="back"></input>
</form>
<form action="default.php">
<input type="submit" value="log out"></input>
</form>
</html>

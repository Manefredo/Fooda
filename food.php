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


$connect = mysql_connect("localhost", $user, $password);
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

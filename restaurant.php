<html>
<body>These are the restaurants you have tried:</body>
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

while($data = mysql_fetch_array($result))
{
	echo $data['restaurants'];
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
